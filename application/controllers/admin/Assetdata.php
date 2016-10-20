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

		$return = $this->Asset_data->register();
		if ($return == true) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'New Asset registered', 'success');
							}, 300);
						</script>";
			$this->load->view('asset_register');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('asset_register');
		}
	}

}
