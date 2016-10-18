<?php

class Category_data extends MY_Model {

	protected $_table_name  = 'Asset_category';
	protected $_primary_key = 'cat_id';
	protected $return_type  = 'array';

	function add() {
		$category_data = array(
			'category'=> $this->input->post('asset_category')
		);

		$res = $this->db->insert('Asset_category', $category_data);
		if ($res) {
			return true;
		}

	}

  function getAll(){
      $sql = "SELECT cat_id AS id, category AS text FROM Asset_category";
      $query = $this->db->query($sql);
      return $query->result();
  }

	function remove(){
		$id =  $this->input->post('asset_category');
		$this->db->where('cat_id',$id);
		$res = $this->db->delete('Asset_category');

		if($res){
			return true;
		}
	}

}
