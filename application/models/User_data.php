<?php

class User_data extends MY_Model {

	protected $_table_name  = 'User';
	protected $_primary_key = 'emp_id';
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

  function getEmpId(){
    $sql = "SELECT emp_id FROM User ORDER BY emp_id DESC  LIMIT 1 ";
    $query = $this->db->query($sql);
    return $query->result();
  }

}
