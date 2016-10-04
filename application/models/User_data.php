<?php

class User_data extends MY_Model {

	protected $_table_name  = 'User';
	protected $_primary_key = 'emp_id';
	protected $return_type  = 'array';

	function add() {
		$user_data = array(
			'emp_id'=> $this->input->post('emp_id'),
      'user_name'=> $this->input->post('emp_name'),
      'password'=> $this->input->post('emp_pw'),
      'user_group'=> $this->input->post('user_group')
		);

		$res = $this->db->insert('User', $user_data);
		if ($res) {
			return true;
		}

	}

  function getAll(){
      $sql = "SELECT emp_id AS id, user_name AS text FROM User";
      $query = $this->db->query($sql);
      return $query->result();
  }

  function getEmpId(){
    $sql = "SELECT emp_id FROM User ORDER BY emp_id DESC  LIMIT 1 ";
    $query = $this->db->query($sql);
    return $query->result();
  }

}
