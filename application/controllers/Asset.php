

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

    public function authorizeItem(){

        $aid = $this->input->post('asset_id');
        $data['asset_detail'] = $this->Asset_data->getAssetData($aid);
        echo $this->load->view('asset_authorize',$data,TRUE);
    }

    public function re_valuation()
    {
      //$aid = $this->input->post('asset_id');
      //$data['list'] =  $this->Asset_data->getRevaluationAsset($aid);
      $this->load->view('asset_re-valuation');
    }

    public function viewAsset()
    {
      $aid = $this->input->post('btn_view');
      $data['list'] =  $this->Asset_data->getAssetData($aid);
      $this->load->view('asset_view_asset',$data);
    }

    public function disposal()
    {
        $this->load->view('asset_disposal');
    }

    public function location_change()
    {
        $this->load->view('asset_location_change');
    }

    public function owner_change()
    {
        $this->load->view('asset_owner_change');
    }
  }


 ?>
