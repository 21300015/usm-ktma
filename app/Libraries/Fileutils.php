<?php
namespace App\Libraries;
use App\Libraries\Innerapp;

class Fileutils {
	public $upload;
	public $folderLocation = '';
	public $autoname = true;
	public $hasdbtable = true;
	public $uploadby = 0;
	public $uploaddate;
	public $latestErrStr='';
	public $fileObject;
	public $generatedname;
	public $appdb;
	function __construct() {
		$this->innerapp= new Innerapp;
	}
	private $DBEXT = array(
			'image/tiff'=>'tiff','application/pdf'=>'pdf','application/zip'=>'zip',
			'application/octet-stream'=>'zip','application/vnd.ms-word' => 'doc',
			'application/msword' => 'doc',
			'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
			'application/vnd.ms-excel' => 'xls',
			'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'xlsx',
			'image/jpg'=>'jpg', 'image/jpeg'=>'jpeg','text/plain'=>'txt',
			'image/pjpeg'=>'jpeg', 'image/png'=>'png',
			'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx',
			'application/vnd.ms-powerpoint' => 'ppt'
	);
	private $ALLOWEXT = array();
	
	public function setAllowed($allowedext = array()) {
		$this->ALLOWEXT = $allowedext;
	}
	public function isallowed() {
		$valid = in_array($this->fileObject['type'], array_keys($this->ALLOWEXT));
		return $valid;
	}
	public function geterror($property = false) {
		return $this->upload->getError($property);
	}
	public function setFile($objFile) {
		$this->fileObject = $objFile;
		return $this->fileObject;
	}
	
	public function generateName() {
		$this->generatedname = 'f'.md5(date('ymdHis').rand(10000, 99999)).'.'.$this->extByType($this->fileObject['type']);
		//return $this->generatedname;
	}
	
	public function typeByExt($fname) {
		$ext = explode(".",$fname);
		if ($ext == false) return "application/octet-stream";
		$contenttype = array_search($ext[1], $this->DBEXT);
		return ($contenttype==false) ? "application/octet-stream" : $contenttype;
	}
	public function extByType($tipefile) {
		$out = $this->ALLOWEXT[$tipefile];
		return ($out == "") ? 'unknown' : $out;
	}
	public function setLocation($strlocation) {
		$this->folderLocation = $strlocation.'/'; 
	}
	public function createMonthFolder($folderAdditional='') {
		$y = date('Y'); $m = date('m');
		$out = @mkdir($this->folderLocation.$y, 0777);
		$path = $this->folderLocation.$y.'/';
		$out1 = @mkdir($path.$m, 0777);
		$path = $path.$m.'/';
		if ($folderAdditional<>'') {
			$out2 = @mkdir($path.$folderAdditional, 0777);
			$path = $path.$folderAdditional.'/';
		}
		return $path;
	}
	public function gethashfile($fileobject) {
		return md5_file($fileobject); 
	}
	public function doUpload($withTimeStructure=false, $destname='') {
		$innerapp= $this->innerapp;
		$idfile = 0;
		if (!$this->isallowed()) return false;
		if ($withTimeStructure == true) {
			$path = $this->createMonthFolder();
		} else {
			$path = $this->folderLocation;
		}
		if ($this->autoname == false) {
			if ($destname == '') return false;
			$this->generatedname = $destname;
		} else {
			$this->generateName();
		}
		$hashfile = $this->gethashfile($this->fileObject['tmp_name']);
		$destparam = $path.$this->generatedname;
		$out = move_uploaded_file($this->fileObject['tmp_name'], $destparam);
		if (!$out) return false;
		else {
			if ($this->hasdbtable == true) { 
				$items = array('realname' => $this->fileObject['name'], 
						'encptfile' => $this->generatedname, 
						'bulan' => date('m'), 'tahun'=> date('Y'), 
						'tipe_file' => $this->fileObject['type'],
						'ekstensi' => $this->extByType($this->fileObject['type']),
						'ukuran' => ($this->fileObject['size']/1000), 
						'createddate' => $innerapp->now(),
						'createdby' => $innerapp->by(), 
						'hash_file' => $hashfile
						);
				$doinsert = $innerapp->appdb->insert('##_m_files', $items); 
				$idfile = $innerapp->appdb->lastid();
				if (!$doinsert) {
					return false;
				} 
			}
			return array('name' => $this->fileObject['name'], 'file'=> $this->generatedname,
						'idfile' => $idfile);
		}
	}
	public function renderfile($lokasifile, $namafile, $generated_name,$contentdisposition='inline', $content_type='') {
		if (file_exists($lokasifile.$namafile)) {
			//$this->setAllowed($this->DBEXT);
			$contenttype = ($content_type=='') ? $content_type : $this->typeByExt($namafile);
			header('Expires: 0');
			header('Pragma: public');
			header('Cache-Control: must-revalidate');
			header('Content-Length: ' . filesize($lokasifile.$namafile));
			header('Content-Type:'.$contenttype);
			header('Content-Disposition:'.$contentdisposition.';filename="'.$generated_name.'"');
			//~ $fp = fopen($lokasifile.$namafile, "r");
			//~ echo fpassthru($fp);
			//~ echo stream_get_contents($fp, 5);
			//~ fclose($fp);
			@readfile($lokasifile.$namafile); // push it out
			exit();
		} else {
			header('HTTP/1.0 404 Not Found');
			echo "File tidak ditemukan";
		}
	}
	public function renderfile1($lokasifile, $namafile, $generated_name, $contentdisposition='inline') {
		if (file_exists($lokasifile.$namafile)) {
			$contenttype = $this->typeByExt($namafile);
			header('Content-Type:'.$contenttype);
			header('Content-Disposition:'.$contentdisposition.';filename="'.$generated_name.'"');
			$fp = fopen($lokasifile.$namafile, "r");
			echo fpassthru($fp);
			//echo stream_get_contents($fp);
			fclose($fp);
		} else {
			header('HTTP/1.0 404 Not Found');
			echo "File tidak ditemukan";
		}
	}
	private function prepare_render($file){
		$filesize = filesize($file);
		$fp = fopen($file, "r");
		$chunk_size = (1<<24);
		$position = 0;
		if ($fp) {
		   while(!feof($fp)){
			  fseek($fp, $position);
			  $chunk = fread($fp,$chunk_size);
			  $last_lf_pos = strrpos($chunk, "\n");
			  $buffer = mb_substr($chunk,0,$last_lf_pos);
			  echo $buffer;
			  $position += $last_lf_pos;
			  if(($position+$chunk_size) > $filesize) $chunk_size = $filesize-$position;
			  $buffer = NULL;
			 
		   }
		   //~ fclose($fp);
		}
	}
	public function renderfile2($lokasifile, $namafile, $generated_name, $contentdisposition='inline') {
		//~ echo $lokasifile.$namafile;die;
		$file = $lokasifile.$namafile;
		if (file_exists($lokasifile.$namafile)) {
			$contenttype = $this->typeByExt($namafile);
			//~ header('Content-Type:'.$contenttype);
			//~ header('Content-Disposition:'.$contentdisposition.';filename="'.$generated_name.'"');
			//~ $fp = fopen($lokasifile.$namafile, "r");
			$filesize = filesize($file);
			$fp = @fopen($file, "r");
			$chunk_size = (1<<24); // 16MB arbitrary
			$position = 0;

			if ($fp) {
			   while(!feof($fp)){
				  fseek($fp, $position);

				  //~ $chunk = fread($fp,$chunk_size);
				  $chunk = stream_get_contents($fp,$chunk_size);
				  $last_lf_pos = strrpos($chunk, "\n");
				  $buffer = mb_substr($chunk,0,$last_lf_pos);
				  //~ echo $buffer;
				  $xxx =  'data:'.$contenttype.';base64,' . base64_encode( $buffer );
				  // Move $position
				  $position += $last_lf_pos;

				  // if remaining is less than $chunk_size, make $chunk_size equal remaining
				  if(($position+$chunk_size) > $filesize) $chunk_size = $filesize-$position;
				  $buffer = NULL;
			   }
			   return $xxx;
			   fclose($fp);
			}
		} else echo "File tidak ditemukan";
	}
}
