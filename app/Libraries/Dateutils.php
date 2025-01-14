<?php
namespace App\Libraries;
class Dateutils {
	private $DATEOUTFORMAT = 'd-m-Y';
	private $DATEINFORMAT = 'dd-mm-yyyy';
	private $dateobject;
	private $month_long = array(
			'00'=>'','01'=>'Januari', '02'=>'Februari', '03'=>'Maret', '04'=>'April',
			'05'=>'Mei', '06'=>'Juni', '07'=>'Juli', '08'=>'Agustus',
			'09'=>'September', '10'=>'Oktober', '11'=>'November', '12'=>'Desember'
	);
	public $month_long_pub = array(
			'00'=>'','01'=>'Januari', '02'=>'Februari', '03'=>'Maret', '04'=>'April',
			'05'=>'Mei', '06'=>'Juni', '07'=>'Juli', '08'=>'Agustus',
			'09'=>'September', '10'=>'Oktober', '11'=>'November', '12'=>'Desember'
	);
	private $month_short = array(
			'01'=>'Jan', '02'=>'Feb', '03'=>'Mar', '04'=>'Apr',
			'05'=>'Mei', '06'=>'Jun', '07'=>'Jul', '08'=>'Agu',
			'09'=>'Sep', '10'=>'Okt', '11'=>'Nov', '12'=>'Des'
	);
	private $month_number = array(
			'01'=>'01', '02'=>'02', '03'=>'03', '04'=>'04',
			'05'=>'05', '06'=>'06', '07'=>'07', '08'=>'08',
			'09'=>'09', '10'=>'10', '11'=>'11', '12'=>'12'
	);
	private $month_romawi = array(
			'01'=>'I', '02'=>'II', '03'=>'III', '04'=>'IV', '05'=>'V', '06'=>'VI',
			'07'=>'VII', '08'=>'VIII', '09'=>'IX', '10'=>'X', '11'=>'XI', '12'=>'XII'
	);
	function __construct() {
		
	}
	function setObject($datestring) {
		$this->dateobject = strtotime($datestring);
	}
	function getMonth($var, $tipe='number') {
		//~ die($var);
		if ($tipe=='long')
			return $this->month_long[$var];
		else if ($tipe=='short')
			return $this->month_short[$var];
		else if ($tipe=='romawi')
			return $this->month_romawi[$var];
		else return $this->month_number[$var];
	}
	function tgl($var, $type = '') {
		if ($type =='') $type = $this->DATEOUTFORMAT;
		if ($var == '0000-00-00 00:00:00' || $var=='' || $var=='0000-00-00')
			return '';
		return date($type, strtotime($var));
	}

	function tglformat($var, $monthtype='number', $delimiter="-") {
		$type = $this->DATEOUTFORMAT;
		if($this->tgl($var) == '') return '';
		$temp = strtotime($this->tgl($var));
		return date('d', $temp).$delimiter.$this->getMonth(date('m', $temp),$monthtype).
		$delimiter.date('Y', $temp);
	}
	function settgl($var, $withtime=false) {
		$type=$this->DATEINFORMAT;
		if ($var == '') return '';
		if ($withtime == true) {
			$dateandtime = explode(' ', $var);
			$var = $dateandtime[0];
		}
		$var = str_replace('/', '-', $var);
		$type = str_replace('/', '-', $type);
		$arrtype = explode('-', $type);
		$arrvar = explode('-', $var);
		$temp = '';
		if ($arrtype[0]=='dd')
			$temp = $arrvar[2].'-'.$arrvar[1].'-'.$arrvar[0];
		else if ($arrtype[0]=='mm')
			$temp = $arrvar[2].'-'.$arrvar[0].'-'.$arrvar[1];
		else if ($arrtype[0]=='yyyy')
			$temp = date('Y-m-d',strtotime($var));
		else $temp = '0000-00-00';
		if ($withtime == true) {
			$temp = $temp.' '.$dateandtime[1];
		}
		return $temp;
	}
	public function fixZero($d){
		if($d < 10){
			$d = '0'.$d;
		}
		return $d;
	}
}
