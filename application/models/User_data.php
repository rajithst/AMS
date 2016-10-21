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

	function getUser(){
			$uid = $this->session->userdata('user_id');
      $sql = "SELECT id,user_name,user_group FROM user WHERE id=$uid";
      return $this->db->query($sql);
  }

  function getUserId(){
    $sql = "SELECT id FROM user ORDER BY id DESC LIMIT 1 ";
    $query = $this->db->query($sql);
    return $query->result();
  }

	function getPassword(){
		$uid = $this->session->userdata('user_id');
		$pw = $this->input->post('pw');
    $sql = "SELECT id FROM user WHERE password= '$pw' and id=$uid ";
    $query = $this->db->query($sql);
    return $query->result();
  }

	function resetPassword(){
		$pw = $this->input->post('user_password');
		$cpw = $this->input->post('curr_password');
		$uid = $this->input->post('user_id');
    $sql = "UPDATE user SET password='$pw' WHERE password= '$cpw' and id=$uid ";
    $query = $this->db->query($sql);
    if($query){
			return true;
		}else{
			return false;
		}
  }

}
