<?php

class Vendor_data extends MY_Model {

	protected $_table_name  = 'Asset_vendor';
	protected $_primary_key = 'vendor_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'vendor'=> $this->input->post('assetVendor')
		);

		$res = $this->db->insert('Asset_vendor', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetVendor');
		$this->db->where('vendor_id',$id);
		$this->db->delete('Asset_vendor');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT vendor_id AS id, vendor AS text FROM Asset_vendor";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
