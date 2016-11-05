

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   * Asset registratino class
   */
  class Master extends Frontend_Controller{

    public function addData(){

      $this->load->view('master_add_data');
    }

    public function removeData()
    {
        $this->load->view('master_remove_data');
    }

  }


 ?>
