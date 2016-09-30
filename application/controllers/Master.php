

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   * Asset registratino class
   */
  class Master extends Frontend_Controller{

    public function categories(){

      $this->load->view('master_categories');
    }

    public function locations()
    {
        $this->load->view('master_locations');
    }

  }


 ?>
