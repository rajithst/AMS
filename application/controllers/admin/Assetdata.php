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

	function getAssetId() {
		$data = $this->Asset_data->getAssetId();
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

	function disposal() {
		$return = $this->Asset_data->disposal();
		if ($return == true) {
			echo "
			<script>
							setTimeout(function () {
									swal('Disposed', 'Asset removed', 'success');
							}, 300);
						</script>";
			$this->load->view('asset_disposal');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('asset_disposal');
		}
	}

	function locationChange() {
		$return = $this->Asset_data->locationChange();
		if ($return == true) {
			echo "
			<script>
							setTimeout(function () {
									swal('Changed', 'Asset location change', 'success');
							}, 300);
						</script>";
			$this->load->view('asset_location_change');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('asset_location_change');
		}
	}

	function ownerChange() {
		$return = $this->Asset_data->ownerChange();
		if ($return == true) {
			echo "
			<script>
							setTimeout(function () {
									swal('Changed', 'Asset owner change', 'success');
							}, 300);
						</script>";
			$this->load->view('asset_owner_change');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('asset_owner_change');
		}
	}

	function reValuation() {
		$return = $this->Asset_data->reValuation();
		if ($return == true) {
			echo "
			<script>
							setTimeout(function () {
									swal('Re-Valuated', 'Asset re-valuation done', 'success');
							}, 300);
						</script>";
						$this->load->view('asset_re-valuation');
		}else{
			echo "
			<script>
							setTimeout(function () {
									swal('Sorry', 'Something went wrong.', 'error');
							}, 300);
						</script>";
			$this->load->view('asset_re-valuation');
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

	function search_d(){
		$data['list'] = $this->Asset_data->search();
		$this->load->view('asset_disposal',$data);
	}

	function search_l(){
		$data['list'] = $this->Asset_data->search();
		$this->load->view('asset_location_change',$data);
	}

	function search_o(){
		$data['list'] = $this->Asset_data->search();
		$this->load->view('asset_owner_change',$data);
	}

	function search(){
		$data['list'] = $this->Asset_data->search();
		$this->load->view('asset_re-valuation',$data);
	}

}
