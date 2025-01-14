<?php
class Mailapi {
	public $url = 'https://smtpmail.arcapada.co.id';
	public $user = 'internalapp';
	public $pass = 'N@s1uduK';
	public $withauth = true;
	public $ishttps = true;
	
	function __construct() {
	}

	function showresult($url, $post=array(), $method='POST', $headers = array()) {		
		$strpost = "";
		if (count($post) > 0) { 
			$posttemp = array();
			foreach ($post as $k=>$v) {
				$posttemp[] = $k."=".$v;
			}
			$strpost = implode("&", $posttemp);
		}
		$ch = curl_init();                    // initiate curl
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_URL,$url);
		if ($method=='POST') {
			//curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POST, true);  
			curl_setopt($ch, CURLOPT_POSTFIELDS, $strpost); // define what you want to post
		} else if ($method == 'GET') {
			//curl_setopt($ch, CURLOPT_URL,$url."?".$strpost);
			curl_setopt($ch, CURLOPT_HTTPGET,true);
		}
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
		//curl_setopt($ch, CURLOPT_PROXY, 'socks5://127.0.0.1:2222'); // return the output in string format
		if ($this->withauth == true) {
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, $this->user.':'.$this->pass);
		}
		if ($this->ishttps==true) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		} 
		$output = curl_exec($ch); // execute
		curl_close ($ch);
		return $output;
	} 
	
	function send($addr, $subject, $body) {
		return $this->showresult($this->url, [
			'addr' => $addr, 'subject' => $subject, 'body' => $body,
		], 'POST'); 
	}
}
 

