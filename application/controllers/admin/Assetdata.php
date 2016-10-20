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

function authorize(){

			if($this->input->post('authentication') == "authorize"){

					$anum = $this->input->post('pabc_serial');
					$return = $this->Asset_data->authorizeAsset();
					if ($return == true) {
						echo "
						<script>
										setTimeout(function () {
												swal('Success', 'Asset ".$anum." authorized.', 'success');
										}, 300);
									</script>";
						$data['list'] =  $this->Asset_data->getUnauthorizedData();
			      $this->load->view('asset_authorize_list',$data);
					}else{
						echo "
						<script>
										setTimeout(function () {
												swal('Sorry', 'Something went wrong.', 'error');
										}, 300);
									</script>";
						$data['list'] =  $this->Asset_data->getUnauthorizedData();
						$this->load->view('asset_authorize_list',$data);
					}

			}elseif ($this->input->post('authentication') == 'reject') {

				$anum = $this->input->post('pabc_serial');
				$return = $this->Asset_data->rejectAsset();
				if ($return == true) {
					echo "
					<script>
									setTimeout(function () {
											swal('Rejected', 'Asset ".$anum." rejected.', 'error');
									}, 300);
								</script>";
					$data['list'] =  $this->Asset_data->getUnauthorizedData();
					$this->load->view('asset_authorize_list',$data);
				}else{
					echo "
					<script>
									setTimeout(function () {
											swal('Sorry', 'Something went wrong.', 'error');
									}, 300);
								</script>";
					$data['list'] =  $this->Asset_data->getUnauthorizedData();
					$this->load->view('asset_authorize_list',$data);
				}
			}
	}

}
