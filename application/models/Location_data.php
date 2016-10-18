<?php

class Location_data extends MY_Model {

	protected $_table_name  = 'Asset_location';
	protected $_primary_key = 'location_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'location'=> $this->input->post('assetLocation')
		);

		$res = $this->db->insert('Asset_location', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetLocation');
		$this->db->where('location_id',$id);
		$this->db->delete('Asset_location');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT location_id AS id, location AS text FROM Asset_location";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
