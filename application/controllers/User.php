<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function addUser()
  {
    $this->load->view('user_addUser');
  }

  public function setting()
  {
    $this->load->view('user_setting');
  }

}

 ?>
