<?php

class Employee_data extends MY_Model {

	protected $_table_name  = 'Employee';
	protected $_primary_key = 'emp_id';
	protected $return_type  = 'array';

	function add() {
		$user_data = array(
			'id'=> $this->input->post('emp_id'),
            'user_group'=> $this->input->post('user_group'),
            'user_name'=> $this->input->post('emp_name'),
            'password'=> $this->input->post('emp_pw'),

		);

		$res = $this->db->insert('user', $user_data);
		if ($res) {
			return true;
		}

	}

  function getAll(){
      $sql = "SELECT emp_id AS id, emp_name AS text FROM Employee";
      $query = $this->db->query($sql);
      return $query->result();
  }

  function getEmpId(){
    $sql = "SELECT emp_id FROM Employee ORDER BY emp_id DESC  LIMIT 1 ";
    $query = $this->db->query($sql);
    return $query->result();
  }

}
