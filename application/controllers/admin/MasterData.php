<?php

class MasterData extends Admin_Controller {
	/**
	 * Assetdata constructor.
	 */
	public function __construct() {

		parent::__construct();
		$this->load->model('Category_data');
		$this->load->model('Sub_category_data');
		$this->load->model('Model_data');
		$this->load->model('Custodian_data');
		$this->load->model('Owner_data');
		$this->load->model('Location_data');
		$this->load->model('Vendor_data');
		$this->load->model('Classification_data');
		$this->load->model('Manufacture_data');
		$this->load->model('Lifetime_data');
		$this->load->model('Warranty_data');


	}

	// Getters ----------------------------------------------------------------
	function getCategory() {
		$data = $this->Category_data->getall();
		echo json_encode($data);
	}

	function getSubCategory() {
		$data = $this->Sub_category_data->getall();
		echo json_encode($data);
	}

	function getModel(){
		$data = $this->Model_data->getAll();
		echo json_encode($data);
	}

	function getCustodian(){
		$data = $this->Custodian_data->getAll();
		echo json_encode($data);
	}

	function getOwner(){
		$data = $this->Owner_data->getAll();
		echo json_encode($data);
	}

	function getLocation(){
		$data = $this->Location_data->getAll();
		echo json_encode($data);
	}

	function getVendor(){
		$data = $this->Vendor_data->getAll();
		echo json_encode($data);
	}

	function getClassification(){
		$data = $this->Classification_data->getAll();
		echo json_encode($data);
	}

	function getManufacture(){
		$data = $this->Manufacture_data->getAll();
		echo json_encode($data);
	}

	function getLifetime(){
		$data = $this->Lifetime_data->getAll();
		echo json_encode($data);
	}

	function getWarranty(){
		$data = $this->Warranty_data->getAll();
		echo json_encode($data);
	}



	//Setters ------------------------------------------------------------------
	function addCategory() {

		$res = $this->Category_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new category', 'success');
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

	function addSubCategory() {

		$res2 = $this->Sub_category_data->add();
		if ($res2) {
			echo "
			<script>
							setTimeout(function () {
								swal('Success', 'You entered new sub category', 'success';
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

	function addModel() {

		$res = $this->Model_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new model', 'success');
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

	function addCustodian() {

		$res = $this->Custodian_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new Custodian', 'success');
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

	function addOwner() {

		$res = $this->Owner_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new Owner', 'success');
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

	function addVendor() {

		$res = $this->Vendor_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new vendor', 'success');
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

	function addClassification() {

		$res = $this->Classification_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new Classification', 'success');
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

	function addManufacture() {

		$res = $this->Manufacture_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new Manufacturer', 'success');
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

	function addLifetime() {

		$res = $this->Lifetime_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new Life Time Data', 'success');
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

	function addWarranty() {

		$res = $this->Warranty_data->add();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'You entered new Warranty Time Data', 'success');
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



	//Removers -----------------------------------------------------------------
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

	function removeSubCategory(){
		$res = $this->Sub_category_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', ' Removed Sub Category', 'success');
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

	function removeModel(){
		$res = $this->Model_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', ' Removed Model', 'success');
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

	function removeCustodian(){
		$res = $this->Custodian_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', ' Removed Custodian', 'success');
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

	function removeOwner(){
		$res = $this->Owner_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', ' Removed Owner', 'success');
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

	function removeVendor(){
		$res = $this->Vendor_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'Removed vendor', 'success');
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

	function removeClassification(){
		$res = $this->Classification_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'Removed Classification', 'success');
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

	function removeManufacture(){
		$res = $this->Manufacture_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'Removed Manufacture', 'success');
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

	function removeLifetime(){
		$res = $this->Lifetime_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'Removed Life Time data', 'success');
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

	function removeWarranty(){
		$res = $this->Warranty_data->remove();
		if ($res) {
			echo "
			<script>
							setTimeout(function () {
									swal('Success', 'Removed Warranty Time data', 'success');
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
