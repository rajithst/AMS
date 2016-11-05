<?php

class Classification_data extends MY_Model {

	protected $_table_name  = 'Asset_classification';
	protected $_primary_key = 'classification_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'classification'=> $this->input->post('assetClassification')
		);

		$res = $this->db->insert('Asset_classification', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetClassification');
		$this->db->where('classification_id',$id);
		$this->db->delete('Asset_classification');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT classification_id AS id, classification AS text FROM Asset_classification";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
