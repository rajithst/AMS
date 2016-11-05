<?php

class Custodian_data extends MY_Model {

	protected $_table_name  = 'Asset_custodian';
	protected $_primary_key = 'custodian_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'custodian'=> $this->input->post('assetCustodian')
		);

		$res = $this->db->insert('Asset_custodian', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetCustodian');
		$this->db->where('custodian_id',$id);
		$this->db->delete('Asset_custodian');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT custodian_id AS id, custodian AS text FROM Asset_custodian";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
