<?php

class Master_data extends MY_Model {

	protected $_table_name  = 'Asset_category';
	protected $_primary_key = 'id';
	protected $return_type  = 'array';

	function add() {
		$category_data = array(
			'category'       => $this->input->post('asset_category'),
			//'sub_category'         => $this->input->post('sub_category'),
		);

		$res = $this->db->insert('Asset_category', $category_data);
		if ($res) {
			return true;
		}

	}

    function getall(){
        $sql = "SELECT * FROM Master_table";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getCategory(){
        $sql = "SELECT cat_id AS id, cat_name AS text FROM Asset_category";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
