<?php

class UserData extends Admin_Controller {
	/**
	 * Assetdata constructor.
	 */
	public function __construct() {

		parent::__construct();
		$this->load->model('User_data');
		// $this->load->model('Category_data');
		// $this->load->model('Sub_category_data');
	}

	function getUser() {

		$data = $this->Category_data->getall();
		if($data){
				echo json_encode($data);
		}else{
			echo "{'emp_id'=>'0'}";
		}


	}

  function getEmpId() {

		$data = $this->User_data->getEmpId();
		echo json_encode($data);

	}

	function addUser() {

		$res = $this->Category_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new category', 'success');
							}, 700);
						</script>";
			$this->load->view('master_categories');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 700);
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
							}, 700);
						</script>";
			$this->load->view('master_categories');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 700);
						</script>";
			$this->load->view('master_categories');
		}

	}


}
