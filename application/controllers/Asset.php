

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   * Asset registratino class
   */
  class Asset extends Frontend_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Asset_data');
    }

    public function register(){
      $this->load->view('asset_register');
    }

    public function authorize(){
      $data['list'] =  $this->Asset_data->getUnauthorizedData();
      $this->load->view('asset_authorize_list',$data);
    }

    public function re_valuation()
    {
        $this->load->view('asset_re-valuation');
    }

    public function disposal()
    {
        $this->load->view('asset_disposal');
    }

    public function location_change()
    {
        $this->load->view('asset_location_change');
    }
  }


 ?>
