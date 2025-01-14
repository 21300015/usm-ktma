<?php
namespace App\Libraries;
use App\Libraries\Appdb;
use App\Libraries\Servervar;
use App\Libraries\Dateutils;
//use App\Config\Siteconfig;

class Innerapp 
{
	public $appdb; 
	public $tanggal; 
	public $fileutils; 
	public $servervar;
	function __construct() {
		$this->servervar = new Servervar;
		$this->appdb = new Appdb;
		$this->tanggal = new Dateutils;
	}
	
	public function createimgcapt(){
		
		$word = rand(10000,99999);
		$width  = 140;
        $height = 50;
        $noise_level = 2;
		
		$im = @imagecreatetruecolor($width, $height)
			or die("Cannot Initialize new GD image stream");
		$bg = imagecolorallocate($im, 0, 14, 113); //background color
		$fg = imagecolorallocate($im, 255, 255, 255);//text color
		$ns = imagecolorallocate($im, 200, 200, 200);//noise color
		//~ header("Content-Type: image/png");
		imagefill($im, 0, 0, $bg);
		$text = $word;
		$font = APPPATH.'/public/cap/texbebas.ttf';
		imagestring($im, 11, 140, 50,  $word, $fg);
		imagettftext($im, 26, 2, 20,40, $fg, $font, $text);
		$quality = 15;
		ob_start();
		imagejpeg($im,null,$quality);
		$binary = ob_get_contents();
		$this->servervar->set('mycaptcha', $word);
		$data ='<img src="data:image/jpeg;base64,'.base64_encode($binary).'">';
		ob_end_clean();
		return $data;
	}
	public function respdecode($response){
        $data = str_replace(':','=',$response);
		$data1 = json_decode(base64_decode($data),true);
		return $data1;
    }

    public function pageattr($suburl,$masksalt,$mode="",$savemode="",$modulename=""){
    	$data = array();
    	$data['token'] = $this->servervar->getToken();
        $data['maskref'] = $this->servervar->maskref($masksalt);
        $data['serviceurl'] = site_url($suburl . '/service/' . $data['token']) . '/';
        $data['mode'] = $mode;
        $data['suburl'] = $suburl;
        $data['savemode'] = $savemode;
        $data['modulename'] = $modulename;
     
        return $data;
    }
	public function datatables2($sql, $displaycolumns=array(), $searchcolumns = array(), $columnisalias = false, $summaryrow = array()) { 
    	$post = json_decode(file_get_contents('php://input'), true); 
    	//$post = $_POST;
    	$search = '';
    	if (isset($post['search'])) {
			$search = $this->appdb->search1($searchcolumns, $post['search']);
		}
    	$order = $this->appdb->sortorder1($post['order'], $post['dir']);
    	// die($sql.' '.$search. $order);
    	$q = $this->appdb->resultperpage1($sql.' '.$search.' '.$order,
    			intval($post['page']), intval($post['pagelength']));
    	$q['summaryrow'] = $summaryrow;
    	return $q;
    }
    public function loguser($waktu, $tipe,$todo) {
		$appdb = $this->appdb; 
		$servervar = $this->servervar;
		$items = array('waktu' => $waktu,
						'tipe' => strtoupper($tipe), 
						'logtext' => htmlentities($todo),
						'iduser' => $servervar->get('USERID'),
						);
		$q = @$appdb->insert('sys_t_syslog', $items);
		return $q;
	}
	public function datatables($sql, $displaycolumns=array(), $searchcolumns = array(), $columnisalias = true, $summaryrow = array()) { 
    	$search = $this->appdb->search($searchcolumns, $columnisalias);
    	$order = $this->appdb->sortorder($_POST['order'], $displaycolumns);
    	// die($sql.' '.$search. $order);
    	$q = $this->appdb->resultperpage($sql.' '.$search.' '.$order,
    			intval($_POST['start']), intval($_POST['length']));
    	$q['summaryrow'] = $summaryrow;
    	return $q;
    }
    
    /*public function validroles($roles = array()) {
		$myroles = $this->appdb->results("select a.id_role from ##_m_pegawaitorole a where  a.id_pegawai=".$this->servervar->get('USERID'));
		// var_dump($myroles);die;
    	foreach ($roles as $role) {
			$ismyrole = $this->find($myroles, 'id_role', $role); 
			$isfound = (count($ismyrole) > 0);
    		if ($isfound) {
    			return true;
    		}
    	}
    	return false; 
    }*/
    public function find($arraytosearch, $fieldwheretofind, $searchvalue, $singlereturn = true, $fieldisindex = false){
    	$out = array();
    	if (!is_array($arraytosearch)) return false;
    	foreach ($arraytosearch as $r) {
    		if ($r[$fieldwheretofind] == $searchvalue) {
    			if ($singlereturn == true) {
    				return $r;
    			} else {
    				if ($fieldisindex == true) {
    					$out[$r[$fieldwheretofind]] = $r;
    				} else {
    					$out[] = $r;
    				}
    			}
    		}
    	}
    	return $out;
    }
    public function validroles($roles = array()) {
		$roletemp = $this->servervar->get('MYROLES');	
    	foreach ($roletemp as $role) {
			if (in_array($role['id_role'], $roles)) {
				return true;
			}
    	}
    	return false; 
    }
    public function clean($v, $flag = ENT_QUOTES | ENT_SUBSTITUTE) {
      return htmlentities($v, $flag);
    }
    public function cleanpost($v, $flag = ENT_QUOTES | ENT_SUBSTITUTE) {
      return htmlentities($_POST[$v], $flag);
    }
    public function datastamp($row, $now='', $type='CREATE') {
		if ($now =='') {
			$now = $this->now();
		}
		$me = $this->servervar->get('USERID');
		if ($type == 'CREATE') {
			$row['createddate'] = $now;
			$row['createdby'] = $me;
		} else {
			$row['updatedate'] = $now;
			$row['updateby'] = $me;
		}
		return $row;
	}
	
	public function dbstamp($row,$type=1,$custom=''){
    	if($type == 1){ //insert di web
    		$row["createddate"] = $this->now();
    		$row["createdby"] = $this->servervar->get('USERID');
    	}elseif($type == 2){ //update di web
			$row["updateddate"] = $this->now();
    		$row["updatedby"] = $this->servervar->get('USERID');
    	}elseif($type == 3){ //custom di web
			$row[$custom."date"] = $this->now();
    		$row[$custom."by"] = $this->servervar->get('USERID');
    	}else{
			$row["updateddate"] = $this->now();
    		$row["updatedby"] = $this->servervar->get('USERID');
    	}
    	return $row;
    }
   	public function stampdelete(){
	 	$dt = array('isactive' => 0,'updateddate'=>$this->now(),'updatedby'=>$this->servervar->get('USERID'));
	 	return $dt;
   	}
   	public function now() {
		return date("Y-m-d H:i:s");
   	}
    public function by() {
		return $this->servervar->get('USERID');
	}
    public function role() {
		return $this->servervar->get('ROLEID');
	}
    public function decpost($post){
        $hasil = json_decode(base64_decode($post),true);
        return $hasil;
    }

    public function decpost_s($post,$maskalt){
        $hasil = $this->servervar->unmaskref($maskalt,base64_decode($post));
      
        return $hasil;
    }
	public function respMessage($status, $message, $title='', $isjson=false, $ref='') {
		$out = array(); 
		$out['status'] = $status; $out['msg'] = $message; $out['title']= $title;
		if ($ref <> '') $out['ref'] = $ref;
		if ($isjson == true) { 
		 	return json_encode($out, true);
		} else { return $out; };
	}
	public function setuuid() {
        $randomnumber1 = rand(100, 9999);
        $randomnumber2 = rand(1000, 99999);
        $randomnumber3 = rand(10000, 99999999);
        $strdata = $randomnumber1.'_'.$randomnumber2.'_'.$randomnumber3.'_'.date("Y-m-d H:i:s.v");
        $out = md5($strdata);
        return $out;
    }
	public function passwordgenerator($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#%^&_-";
		return substr(str_shuffle($chars),0,$length);
    }
    public function savelog($key,$text, $content = array()){
		$now = $this->now();
		$by = 0;
		if($this->servervar->islogin()){
			$by = $this->servervar->get('USERID');
		}
		$uuid = $this->setuuid();
		$items = array(
			'id' => $uuid,
			'time'=>$now,
			'key'=>$key,
			'text'=>$text,
			'user'=>$by,
		);
		if (is_array($content)) {
			if (count($content) > 0) {
				$items['content'] = json_encode($content);
			}
		} 
		$save = @$this->appdb->insert('##_t_syslog',$items);
	}
    public function log($jenis, $userid, $jsoninfo) {
		$items=array('jenis' => $jenis, 'userid' => $userid, 'datelog'=> $this->now(), 
				'loginfo' => $jsoninfo);
		$insert = @$this->appdb->insert("##_t_log", $items); 
	}
    public function setNotFound($isjson=true) {
		header('HTTP/1.0 404 Not Found'); 
		if ($isjson==true) {
			header('Content-Type:application/json');
			$out = $this->respMessage('error', 'You have to login in order to get this service', 
				'Restricted Area', true);
		} else {
			$out = '<h1>Page Not Found</h1>';
		}
		die($out);
	}
	public function redirect($tujuan) {
		header('HTTP/1.1 301 Moved Permanently');
		header('Location:'.site_url($tujuan));
		die();
	} 
}
