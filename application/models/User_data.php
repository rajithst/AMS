<?php

class User_data extends MY_Model {

	protected $_table_name  = 'user';
	protected $_primary_key = 'id';
	protected $return_type  = 'array';

	function add() {
		$user_data = array(
      'user_group'=> $this->input->post('user_group'),
      'user_name'=> $this->input->post('user_name'),
      'password'=> $this->input->post('user_password'),
		);

		$res = $this->db->insert('user', $user_data);
		if ($res) {
			return true;
		}

	}

  function getAll(){
      $sql = "SELECT id , user_name AS text FROM user";
      $query = $this->db->query($sql);
      return $query->result();
  }

  function getUserId(){
    $sql = "SELECT id FROM user ORDER BY id DESC LIMIT 1 ";
    $query = $this->db->query($sql);
    return $query->result();
  }

}
