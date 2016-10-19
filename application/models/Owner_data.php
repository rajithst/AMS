<?php

class Owner_data extends MY_Model {

	protected $_table_name  = 'Asset_owner';
	protected $_primary_key = 'owner_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'owner'=> $this->input->post('assetOwner')
		);

		$res = $this->db->insert('Asset_owner', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetOwner');
		$this->db->where('owner_id',$id);
		$this->db->delete('Asset_owner');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT owner_id AS id, owner AS text FROM Asset_owner";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
