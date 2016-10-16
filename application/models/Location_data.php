<?php

class Location_data extends MY_Model {

	protected $_table_name  = 'asset_location';
	protected $_primary_key = 'location_id';
	protected $return_type  = 'array';

	function add() {
		// $user_data = array(
		// 	'id'=> $this->input->post('emp_id'),
    //         'user_name'=> $this->input->post('emp_name'),
    //         'password'=> $this->input->post('emp_pw'),
    //         'user_group'=> $this->input->post('user_group')
		// );
    //
		// $res = $this->db->insert('user', $user_data);
		// if ($res) {
		// 	return true;
		// }

	}

  function getAll(){
      $sql = "SELECT location_id AS id, location AS text FROM Asset_location";
      $query = $this->db->query($sql);
      return $query->result();
  }

}
