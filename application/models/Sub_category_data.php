<?php

class Sub_category_data extends MY_Model {

	protected $_table_name  = 'Asset_sub_category';
	protected $_primary_key = 'sub_cat_id';
	protected $return_type  = 'array';

	function add() {
		$category_data = array(
			'sub_category'=> $this->input->post('sub_cat'),
      'category_id'=> $this->input->post('asset_category')
		);

		$res = $this->db->insert('Asset_sub_category', $category_data);
		if ($res) {
			return true;
		}

	}

  function getall(){
			$cat_id = $this->input->get('search');
      $sql = "SELECT sub_cat_id AS id, sub_category AS text FROM Asset_sub_category WHERE category_id='$cat_id'";
      $query = $this->db->query($sql);
      return $query->result();
  }

	function remove(){
		$id =  $this->input->post('asset_sub_category');
		$this->db->where('sub_cat_id',$id);
		$this->db->delete('Asset_sub_category');
		$res = $this->db->affected_rows();

		if($res){
			return true;
		}
	}



}
