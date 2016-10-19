<?php

class Warranty_data extends MY_Model {

	protected $_table_name  = 'Asset_warranty';
	protected $_primary_key = 'warranty_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'warranty'=> $this->input->post('assetWarranty')
		);

		$res = $this->db->insert('Asset_warranty', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetWarranty');
		$this->db->where('warranty_id',$id);
		$this->db->delete('Asset_warranty');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT warranty_id AS id, warranty AS text FROM Asset_warranty";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
