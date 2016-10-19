<?php

class MasterData extends Admin_Controller {
	/**
	 * Assetdata constructor.
	 */
	public function __construct() {

		parent::__construct();
		$this->load->model('Category_data');
		$this->load->model('Sub_category_data');
		$this->load->model('Location_data');
	}

	// Getters
	function getCategory() {

		$data = $this->Category_data->getall();
		echo json_encode($data);

	}

	function getSubCategory() {

		$data = $this->Sub_category_data->getall();
		echo json_encode($data);

	}

	function getLocation(){
		$data = $this->Location_data->getAll();
		echo json_encode($data);
	}


	//Setters
	function addCategory() {

		$res = $this->Category_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new category', 'success');
							}, 300);
						</script>";
			$this->load->view('master_categories');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('master_categories');
		}

	}

	function addSubCategory() {

		$res2 = $this->Sub_category_data->add();
		if ($res2) {
			echo "
			<script>
							setTimeout(function () {
								swal('Success', 'You entered new sub category', 'success';
							}, 300);
						</script>";
			$this->load->view('master_categories');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('master_categories');
		}

	}

	function addLocation() {

		$res = $this->Location_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new location', 'success');
							}, 300);
						</script>";
			$this->load->view('master_add_data');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('master_add_data');
		}

	}

	//Removers
	function removeCategory(){
		$res = $this->Category_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', ' Removed Category', 'success');
							}, 300);
						</script>";
			$this->load->view('master_remove_data');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('master_remove_data');
		}
	}

	function removeLocation(){
		$res = $this->Location_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'Removed location', 'success');
							}, 300);
						</script>";
			$this->load->view('master_remove_data');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('master_remove_data');
		}
	}

}
