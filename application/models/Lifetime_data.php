<?php

class Lifetime_data extends MY_Model {

	protected $_table_name  = 'Asset_lifetime';
	protected $_primary_key = 'lifetime_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'lifetime'=> $this->input->post('assetLifetime')
		);

		$res = $this->db->insert('Asset_lifetime', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetLifetime');
		$this->db->where('lifetime_id',$id);
		$this->db->delete('Asset_lifetime');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT lifetime_id AS id, lifetime AS text FROM Asset_lifetime";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
