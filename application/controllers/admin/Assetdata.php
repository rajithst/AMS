<?php

class Assetdata extends Admin_Controller{


    /**
     * Assetdata constructor.
     */
    public function __construct(){

        parent::__construct();
        $this->load->model('Asset_data');
    }

    function getAssetCategory(){

        $data = $this->Asset_data->getCategory();

        echo  json_encode($data);

    }

}
