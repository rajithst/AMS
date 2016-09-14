<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   * Asset registratino class
   */
  class Asset extends CI_Controller
  {

    public function register()
    {
      $this->load->view('asset_register');
    }
  }

 ?>
