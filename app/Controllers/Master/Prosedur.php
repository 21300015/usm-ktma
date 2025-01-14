<?php
namespace App\Controllers\Master;
use App\Libraries\Fileutils;
use App\Libraries\Dateutils;
use App\Controllers\BaseController;

class Prosedur extends BaseController
{
	public $suburl = 'master/prosedur';
	public $masksalt = '4m23';
	function __construct() {
		parent::__construct();
		
		$this->modulename = 'Prosedur & Pedoman';
		$this->trigger['add'] = $this->innerapp->servervar->encpt('Ra7ePAFnSQ');
		$this->trigger['edit'] = $this->innerapp->servervar->encpt('Dn8A9m0CR7');
		$this->trigger['delete'] = $this->innerapp->servervar->encpt('Csixh4E5u8');
		$this->trigger['upload'] = $this->innerapp->servervar->encpt('Csdu8sau3bf');
	}
	public function index()
    {
		$innerapp = $this->innerapp;
		$this->innerapp->servervar->generateToken();
		$data = array();
		$this->addJs('modules/master/prosedur.js');
        return $this->ViewDefault($this->suburl.'/pagebody', $data);
    }
    private function grid() {
		$innerapp = $this->innerapp; 
		$filter = "";
		$searchcolumns = array( 'id' => 'a.id', 'jdl_prosedur' => 'a.jdl_prosedur');
		$displaycolumns = array('id','jdl_prosedur','deskprosedur');
		$sql = "SELECT a.id, a.jdl_prosedur, a.deskprosedur, a.datecreate, a.jnsfile, a.ketprosedur, a.id_files,
		date_format(a.datecreate, '%d-%m-%Y') cd, b.realname 
		 FROM ##_m_prosedur a
		 LEFT JOIN ##_m_files b ON b.id=a.id_files
				WHERE a.isactive=1";
		$q = $innerapp->datatables($sql,$displaycolumns, $searchcolumns, true);	
		return $q;
	}
    public function service($token, $servicename) {
		$innerapp = $this->innerapp;
		header('Content-Type: application/json');
		if(!$innerapp->servervar->trusttoken($token)) {
			return $innerapp->respMessage('error', 'Kesalahan proses', 'Error 101', true); 
		}
		switch($servicename) {
			case 'grid' : $out = $this->grid(); break;
			case 'save' : $out = $this->save(); break;
			default : $out = $innerapp->respMessage('error', 'Kesalahan proses', 'Error 101');
		}
		return json_encode($out);
	}

	private function save() {
		$innerapp = $this->innerapp; 
		$mode = $innerapp->cleanpost('savemode');
		switch($mode) {
			case $this->trigger['add'] : $out = $this->saveadd() ; break;
			case $this->trigger['edit'] : $out = $this->saveedit() ; break;
			case $this->trigger['delete'] : $out = $this->savedelete() ; break;
			default : 
				header('HTTP/1.0 404 Not Found');
				$out = $innerapp->respMessage('error', 'Kesalahan proses', 'Error 103');
		}
		return $out;
	}
	private function checkvar($d) {
		$innerapp = $this->innerapp;
		$out = array(
			'id_files' => $d['idfile'],
			'jdl_prosedur' => $d['jdlprosedur'],
			'deskprosedur' => $d['deskprosedur'],
			'jnsfile' => $d['jnsfile'],
			'ketprosedur' => $d['ketprosedur'],
			'datecreate' =>  $this->innerapp->tanggal->settgl($d['datecreate']),
		); 
		return $out;
	}
	private function saveadd() {
		$innerapp= $this->innerapp;
		$dt = $innerapp->decpost($innerapp->cleanpost('dt'));
		//die(var_export($dt));
		$items = $innerapp->dbstamp($this->checkvar($dt),1);
		$sv = $innerapp->appdb->insert('##_m_prosedur', $items);
		if (!$sv) {
			return $innerapp->respMessage('error', 'Kesalahan proses', 'Error 101');
		}else{
			return $innerapp->respMessage('info', 'Data berhasil ditambahkan', 'Berha
		}
	}
	private function saveedit() {
		$innerapp = $this->innerapp;
		$dt = $innerapp->decpost($innerapp->cleanpost('dt'));
		
		$id = $innerapp->servervar->unmaskref($this->masksalt, $dt['id']);
		if (!$id) {
			return $innerapp->respMessage('error', 'Gagal Mengubah Data', 'Error 200');
		}
		$items = $innerapp->dbstamp($this->checkvar($dt),2);
		$q = $innerapp->appdb->update('##_m_prosedur', $items, array('id' => $id));
		if (!$q) {
			return $innerapp->respMessage('error', 'Gagal Mengubah Data', 'Error 201');
		}else{
			return $innerapp->respMessage('info', 'Data berhasil diubah', 'Berhasil');
		}
	}
	private function savedelete() {
		$innerapp = $this->innerapp; 
		$id = $innerapp->servervar->unmaskref($this->masksalt, $innerapp->cleanpost('id'));sil');
		if (!$id) {
			return $innerapp->respMessage('error', 'Kesalahan proses', 'Error 300');
		}
		$q = $innerapp->appdb->update('##_m_prosedur', $innerapp->stampdelete(), array('id' => $id));
		if (!$q) {
			return $innerapp->respMessage('error', 'Kesalahan proses', 'Error 301');
		}else{
			return $innerapp->respMessage('info', 'Data berhasil dihapus', 'Berhasil');
		}
	}
	public function upload($token)
	{
		$innerapp = $this->innerapp;
		//die(var_export($this->appconfig, true));
		if (!$innerapp->servervar->trusttoken($token)) {
			return $innerapp->respMessage('error', 'Kesalahan proses', 'Error 101', true);
		}
		if (!$_FILES['filenya']) {
			return $innerapp->respMessage('error', 'Gagal mengupload file', 'Gagal Upload', true);
		}

		$fileutils = new Fileutils;
		$fileutils->setFile($_FILES['filenya']);
		$fileutils->setAllowed(array(
			'application/pdf' => 'pdf', 'application/vnd.ms-word' => 'doc',
			'application/msword' => 'doc',
			'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
			'application/wps-office.docx' => 'docx'
		));

		$fileutils->setLocation($this->appconfig['filelocation']);
		if ($fileutils->isallowed() == false) {
			return $innerapp->respMessage('error', 'Tipe file "' . $fileutils->fileObject['type'] . '" tidak diijinkan', 'Upload ditolak', true);
		}
		$exec = $fileutils->doUpload(true);

		if (!$exec) {
			return $innerapp->respMessage('error', array('msg' => 'Gagal mengupload file'), 'Upload ditolak', true);
		} else {
			return $innerapp->respMessage('info', array('msg' => 'File berhasil diupload', 'id_file' => $exec['idfile'], 'name' => $exec['name']), 'Berhasil', true);
		}
	}
	public function download($token, $ref)
	{
		$innerapp = $this->innerapp;
		if (!$innerapp->servervar->trusttoken($token)) {
			header('HTTP/1.0 404 Not Found');
			echo 'Kesalahan proses';
			return;
		}
		$id = $innerapp->servervar->unmaskref($this->masksalt, $ref);
		if (!$id) {
			header('HTTP/1.0 404 Not Found');
			echo 'File tidak ditemukan';
			return;
		}
		$fileutils = new Fileutils;

		//header('Content-type:application/pdf');
		$row = $innerapp->appdb->row("select  a.tahun, a.bulan, a.encptfile, a.realname, a.tipe_file ,a.id from ##_m_files a 
				where a.id = '" . $id . "'");
		$path = $this->appconfig['filelocation'] . '/' . $row['tahun'] . '/' . $row['bulan'] . '/';
		// die($path.'/'.$row['filename']);	
		$fileutils->renderfile($path, $row['encptfile'], $row['realname'], 'inline', $row['tipe_file']);
	}		
}
