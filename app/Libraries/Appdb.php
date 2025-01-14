<?php

namespace App\Libraries;

class Appdb 
{
	private $preftable;
	public $siteconfig;
	public $db;
	function __construct() {
		//$this->siteconfig = $this->config->item('siteconfig');
		$this->preftable = array('##_', 'dm_');
		$this->db= \Config\Database::connect();
	}
	private function prefreplace($sql) {
		$out = str_replace($this->preftable[0], $this->preftable[1], $sql);
		return $out;
	}
	
	function results($sql) {
		$q = $this->db->query($this->prefreplace($sql));
		return $q->getResultArray();
	}
	
	function row($sql) { 
		$out = array();
		$q = $this->db->query($this->prefreplace($sql)." limit 1");
		//if (!$q) return array();
		$row = $q->getRowArray();
		if (!isset($row)) return array();
		return $row;
	}
	function numrows($sql){
		$sql = $this->prefreplace($sql);
		$query = $this->row("select coalesce(count(*),0) as xxcolom from (".$sql.") xxtable");
		$countrow = intval($query['xxcolom']);
		return $countrow;
	}
	function resultperpage1($sql,$page,$displayrow,$pagination=true){
		$sql = $this->prefreplace($sql);
        // echo $sql;die;
		$countrow = $this->numrows($sql);
		$pagecount = ($displayrow > 0) ? ceil($countrow/$displayrow) : 1;
		$frompage = 0;
		if ($page <= 1) {
			$frompage = 0;
		} else {
			$frompage = (($page-1)*$displayrow) ;
		}
		if($pagination == true){
			$sql = $sql.' limit '.$displayrow.' offset '.$frompage;
		}
		$rset = $this->results($sql);
		
		return array('rows'=>($rset==false)? array() : $rset, 
				'pagecount'=>$pagecount,'total'=>$countrow);
	}

    function resultperpage($sql, $page, $displayrow)
    {
        $sql = $this->prefreplace($sql);
        $countrow = $this->numrows($sql);
        $frompage = ($page <= 1) ? 0 : $page;
        $sql = $sql . ' limit ' . $displayrow . ' offset ' . $frompage;
        $rset = $this->results($sql);
        //die($sql)
        //return array('data'=>$rset);
        return array(
            'data' => ($rset == false) ? array() : $rset,
            'draw' => intval($_POST['draw']),
            'recordsTotal' => $countrow,
            'recordsFiltered' => $countrow
        );
    }
	function sortorder1($orderby, $direction='desc') {
		return " order by ".$orderby." ".$direction;
	}
	function sortorder($orderby = array(), $listcolumn=array()) {
		$temp = array();
		if (count($listcolumn) == 0 || count($orderby) == 0) {
			return "";
		} 
		foreach ($orderby as $k => $v) { // $v format is array('column' => 0, 'dir' => 'asc');
			$v_dir = ($v['dir'] == 'asc') ? 'asc' : 'desc';
			if (isset($v['column']) && isset($v['dir'])) {
				$temp[] = $listcolumn[intval($v['column'])].' '.$v_dir;
			}
		}
		if (count($temp) == 0) return "";
		$out = implode(',', $temp);
		return " order by ".$out;
	}
	
	function search1($searchmap, $searchvalue){
		$outstring = ' and (';
		$arrstring= array();
		foreach ($searchmap as $k => $col) {
			$arrstring[] = "upper(".$col.") like '%".htmlspecialchars(strtoupper($searchvalue))."%' ";
		}	
		$outstring .= implode(' or ', $arrstring).')';
		return $outstring;
	}
	
	function search($searchmap, $columnisalias = false){
		//$searchmap = array('s1' => 'a.nip', 's2' => 'a.nama','s3'=> 'b.jabatan','s4' => 'c.nmgolongan', 's5' => 'c.nmpangkat');
		$kolom = $_POST['columns'];
		$search = htmlspecialchars($_POST['search']['value']);
		//$search = $this->db->escape($search);
		$outstring = ' and (';
		$arrstring= array();
		if ($columnisalias == false) {
			foreach ($kolom as $col) {
				if (in_array($col['data'],$searchmap)) {
					$arrstring[] = "upper(".$col['data'].") like '%".strtoupper($search)."%'";
				}
			}	
		} else {
			foreach ($kolom as $col) {
				if (in_array($col['data'],array_keys($searchmap))) {
					$arrstring[] = "upper(".$searchmap[$col['data']].") like '%".strtoupper($search)."%'";
				}
			}
		}
		$outstring .= implode(' or ', $arrstring).')';
		return $outstring;
	}
	function insert($tablename, $items = array()) {
		//$this->db->set($items);
		$builder = $this->db->table($this->prefreplace($tablename));
		foreach($items as $ki => $wi) {
			$builder->set($ki, $wi); 
		}
		return $builder->insert($items); 
	}
	function massinsert($tablename,$items=array()) {
		$builder = $this->db->table($this->prefreplace($tablename));
		return $builder->insertBatch($items); 
	}
	function update($tablename, $items = array(), $where=array()) {
		$builder = $this->db->table($this->prefreplace($tablename));
		
		foreach ($where as $k => $wh) {
			$builder->where($k, $wh);
		}
		return $builder->update($items);
	}
	function delete($tablename, $where=array()) {
		$builder = $this->db->table($this->prefreplace($tablename));
		foreach ($where as $k => $wh) {
			$builder->where($k, $wh);
		}
		return $builder->delete();
	}
	function truncate($tablename) {
		$builder = $this->db->table($this->prefreplace($tablename));
		return $builder->truncate();
	}
	function lastid() {
		return $this->db->insertID();
	}
	function exec($sql) {
		return $this->db->query($this->prefreplace($sql));
	}
	function virtualdelete($tablename, $where, $flagtofield = '', $otherfieldupdate= array()) {
		$otherupdate= '';
		$strflagtofield = '';
		if (count($otherfieldupdate) > 0) {
			$otherupdate = implode(',', $otherfieldupdate);
			$otherupdate = ",".$otherupdate;	 
		}
		if ($flagtofield <> '') {
			$strflagtofield = ','.$flagtofield."=concat('[D] ', ".$flagtofield.")";
		}
		$sql = "update ".$this->prefreplace($tablename)." set isactive = 0 ".
				$strflagtofield." ".$otherupdate.
				" where ".$where;
		return $this->db->query($sql);
	}
	
}
