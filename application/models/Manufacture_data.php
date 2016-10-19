<?php

class Manufacture_data extends MY_Model {

	protected $_table_name  = 'Asset_manufacture';
	protected $_primary_key = 'manufacture_id';
	protected $return_type  = 'array';

	function add() {
		$data = array(
			'manufacture'=> $this->input->post('assetManufacture')
		);

		$res = $this->db->insert('Asset_manufacture', $data);
		if ($res) {
			return true;
		}

	}

	function remove(){
		$id = $this->input->post('assetManufacture');
		$this->db->where('manufacture_id',$id);
		$this->db->delete('Asset_manufacture');
		$res = $this->db->affected_rows();
		if($res){
			return true;
		}
	}

  function getAll(){
      $sql = "SELECT manufacture_id AS id, manufacture AS text FROM Asset_manufacture";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
