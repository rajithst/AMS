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

    // function getall(){
    //     $sql = "SELECT * FROM Master_table";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }
    //
    // function getCategory(){
    //     $sql = "SELECT cat_id AS id, cat_name AS text FROM Asset_category";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }

}