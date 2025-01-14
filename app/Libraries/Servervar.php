<?php
namespace App\Libraries;

class Servervar
{
	public $storage = null;
    private $saltFront = "24j8";
    private $saltBack = "53l6";
    function __construct() {
		$this->storage = \Config\Services::session();
    }
    public function init($session) {
		$this->storage=$session;
	}
    public function set($key, $value = null) {
    	$this->storage->set($key, $value);	
    }
    
    public function get($key) {
        $out = $this->storage->get($key);
        return $out;
    }
    public function remove($key) {
    	$this->storage->remove($key);
    }
    public function destroy() {
    	$this->storage->destroy();
    }
    
    public function setFlashData($key, $value) {
    	$this->storage->setFlashdata($key, $value);;
    }
    public function getFlashData($key) {
    	$this->storage->getFlashData($key);
    }
    public function islogin() {
    	//if (!isset($_SESSION['EMAIL'])) return false;
    	if ($this->get("EMAIL") <> "") return true;
    	else return false;
    }
    public function setlogin($loginname) {
    	$this->set("EMAIL", $loginname);
    }
    public function unmaskref($splitter, $var){
		$out = explode($splitter, $var);
		// die(var_export($out,true));
		if (count($out) < 3) return false;
		if (intval($out[1]) == 0) return false;
		else return $out[1];
	}
    public function encpt($val, $isdynamic=false) {
    	if ($val == '') return '';
    	if ($isdynamic==true)
    		return md5($this->saltFront.$val.$this->saltBack.$this->get('TOKEN'));
    	else
    		return md5($this->saltFront.$val.$this->saltBack);
    }
    public function generateToken() {
    	$randomnumber = rand(100,999);
    	$userid = ($this->islogin()) ? $this->get("EMAIL") : '0';
    	$randomtoken = $this->encpt($randomnumber.'_'.$userid.'_'.date('YmdHis'));
    	$this->set('TOKEN', $randomtoken);
    }
    public function getToken() {
    	if ($this->get("TOKEN") <> "") return $this->get("TOKEN");
    	else return "";
    }
    public function trusttoken($tokenstring) {
    	if ($this->get('TOKEN') == '') return false;
    	if ($tokenstring == '') return false;
    	if ($this->get('TOKEN') == $tokenstring) return true;
    	else return false;
    }
    
    public function maskref($splitter, $frontlength=15, $backlength=7){
		$random = rand(100, 999);
		$out = array();
		$out[0] = substr($this->encpt($random.date('dHis')), 0, $frontlength).$splitter;
		$out[1] =  $splitter.substr($random.$this->encpt(date('siHd')), 0, $backlength);
		return $out;
	}
	public function refmasked($id, $splitter, $frontlength=12, $backlength=5){
		$random = rand(100, 999);
		$out = array();
		$out[0] = substr($this->encpt($random.date('dHis')), 0, $frontlength).$splitter;
		$out[1] =  $splitter.substr($random.$this->encpt(date('siHd')), 0, $backlength);
		return $out[0].$id.$out[1];
	}
}
