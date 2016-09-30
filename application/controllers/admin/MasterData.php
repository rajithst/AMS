<?php

class MasterData extends Admin_Controller {
	/**
	 * Assetdata constructor.
	 */
	public function __construct() {

		parent::__construct();
		$this->load->model('Master_data');
		$this->load->model('Category_data');
		$this->load->model('Sub_category_data');
	}

	function getCategory() {

		$data = $this->Category_data->getall();
		echo json_encode($data);

	}

	function addCategory() {

		$res = $this->Category_data->add();
		if ($res) {
			echo "
			<script>
							alert('New category add.');
							//setTimeout(function () {
								//	swal('Success', 'You entered new category', 'success';
							//}, 1000);
						</script>";
			$this->load->view('master_categories');
		}

	}

	function addSubCategory() {

		$res = $this->Category_data->add();
		if ($res) {
			echo "
			<script>
							alert('New category add.');
							//setTimeout(function () {
								//	swal('Success', 'You entered new category', 'success';
							//}, 1000);
						</script>";
			$this->load->view('master_categories');
		}

	}

}
