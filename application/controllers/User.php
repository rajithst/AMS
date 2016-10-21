<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_data');
  }

  

  public function setting()
  {
    $data['user_data'] = $this->User_data->getUser();
    $this->load->view('user_setting',$data);
  }

}

 ?>
