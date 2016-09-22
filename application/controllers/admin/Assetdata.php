<?php

class Assetdata extends Admin_Controller {
	/**
	 * Assetdata constructor.
	 */
	public function __construct() {

		parent::__construct();
		$this->load->model('Asset_data');
	}

	function getAssetCategory() {

		$data = $this->Asset_data->getall();

		echo json_encode($data);

	}

	function register() {

		$retu = $this->Asset_data->register();
		if ($retu == true) {
			echo "inserted";
		}

	}

}