<?php

class Model_data extends MY_Model {

	protected $_table_name  = 'Asset_model';
	protected $_primary_key = 'model_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'model'=> $this->input->post('assetModel')
		);

		$res = $this->db->insert('Asset_model', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetModel');
		$this->db->where('model_id',$id);
		$this->db->delete('Asset_model');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT model_id AS id, model AS text FROM Asset_model";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
