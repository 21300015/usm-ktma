<?php
namespace App\Controllers\Master;
use App\Controllers\BaseController;

class Datapasien extends BaseController
{
	public $suburl = 'master/datapasien';
	public $masksalt = '4k23';
	function __construct() {
		parent::__construct();
		
		$this->modulename = 'Data Pasien';
		$this->trigger['add'] = $this->innerapp->servervar->encpt('Ra7ePAFnSQ');
		$this->trigger['edit'] = $this->innerapp->servervar->encpt('Dn8A9m0CR7');
		$this->trigger['delete'] = $this->innerapp->servervar->encpt('Csixh4E5u8');
	}
	public function index()
    {
		$innerapp = $this->innerapp;
		$data = array();
		$this->addJs('modules/master/data_pasien.js');
        return $this->ViewDefault($this->suburl.'/pagebody', $data);
    }
    private function grid() {
		$innerapp = $this->innerapp; 
		$filter = "";
		$searchcolumns = array( 'id' => 'a.id', 'no_mr' => 'a.no_mr', 'nama' => 'a.nama');
		$displaycolumns = array('id','no_mr','nm_jns_pasien','nama','nip','gender','ttl','alamat','ibukandung','nohp');
		$sql = "SELECT a.nama, a.no_mr, a.nip, a.gender, CONCAT (a.tempatlahir,', ', a.tgllahir) AS ttl, a.alamat, 
				a.ibukandung, a.nohp, b.nm_jns_pasien FROM ##_m_pasien a
				LEFT JOIN ##_m_jns_pasien b ON b.id=a.id_m_jns_pasien
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
			'nama' => $d['nama'],
		); 
		return $out;
	}
	private function saveadd() {
		$innerapp= $this->innerapp;
		$dt = $innerapp->decpost($innerapp->cleanpost('dt'));
		$items = $innerapp->dbstamp($this->checkvar($dt),1);
		$sv = $innerapp->appdb->insert('##_m_bidang', $items);
		if (!$sv) {
			return $innerapp->respMessage('error', 'Kesalahan proses', 'Error 101');
		}else{
			return $innerapp->respMessage('info', 'Data berhasil ditambahkan', 'Berhasil');
		}
	}
	private function saveedit() {
		$innerapp = $this->innerapp;
		$dt = $innerapp->decpost($innerapp->cleanpost('dt'));
		
		$id = $innerapp->servervar->unmaskref($this->masksalt, $dt['ref']);
		if (!$id) {
			return $innerapp->respMessage('error', 'Gagal Mengubah Data', 'Error 200');
		}
		$items = $innerapp->dbstamp($this->checkvar($dt),2);
		$q = $innerapp->appdb->update('##_m_bidang', $items, array('id' => $id));
		if (!$q) {
			return $innerapp->respMessage('error', 'Gagal Mengubah Data', 'Error 201');
		}else{
			return $innerapp->respMessage('info', 'Data berhasil diubah', 'Berhasil');
		}
	}
	private function savedelete() {
		$innerapp = $this->innerapp; 
		$id = $innerapp->servervar->unmaskref($this->masksalt, $innerapp->cleanpost('id'));
		if (!$id) {
			return $innerapp->respMessage('error', 'Kesalahan proses', 'Error 300');
		}
		$q = $innerapp->appdb->update('##_m_bidang', $innerapp->stampdelete(), array('id' => $id));
		if (!$q) {
			return $innerapp->respMessage('error', 'Kesalahan proses', 'Error 301');
		}else{
			return $innerapp->respMessage('info', 'Data berhasil dihapus', 'Berhasil');
		}
	}
}
