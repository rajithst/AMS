<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Class for home view
 */
class Home extends CI_Controller
{

  public function getHome()
  {
    $this->load->view('home');
  }

}


 ?>
