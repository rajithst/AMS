<?php

class UserData extends Admin_Controller {
	/**
	 * Assetdata constructor.
	 */
	public function __construct() {

		parent::__construct();
		$this->load->model('User_data');
	}

	function getUser() {

		$data = $this->User_data->getall();
		echo json_encode($data);

	}

  function getUserId() {

		$data = $this->User_data->getUserId();
		echo json_encode($data);

	}

	function addUser() {

		$res = $this->User_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'New user added.', 'success');
							}, 300);
						</script>";
			$this->load->view('user_addUser');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('user_addUser');
		}

	}

}
