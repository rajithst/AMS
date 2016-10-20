<?php

class Asset_data extends MY_Model {

	protected $_table_name  = 'Asset_Details';
	protected $_primary_key = 'id';
	protected $return_type  = 'array';

	function register() {

		$date       = date("Y/m/d");
		$asset_data = array(

			'date'                 => $date,
			'PABC_serial_number'   => $this->input->post('pabc_serial'),
			'reference_number'     => $this->input->post('reference_num'),
			'asset_category'       => $this->input->post('asset_category'),
			'sub_category'         => $this->input->post('sub_category'),
			'confidentiality'      => $this->input->post('asset_rate_C'),
			'integrity'            => $this->input->post('asset_rate_I'),
			'availability'         => $this->input->post('asset_rate_A'),
			'cia_value'            => $this->input->post('asset_value'),
			'asset_custodian'      => $this->input->post('assetCustodian'),
			'asset_owner'          => $this->input->post('assetOwner'),
			'asset_serial_number'  => $this->input->post('assetSerial'),
			'asset_description'    => $this->input->post('assetDescription'),
			'asset_model'          => $this->input->post('assetModel'),
			'manufacturer'         => $this->input->post('assetManufacture'),
			'OS_version'           => $this->input->post('asset_os_version'),
			'location'             => $this->input->post('asset_location'),
			'asset_classification' => $this->input->post('assetClassification'),
			'color'                => $this->input->post('asset_color'),
			'lifetime_period'      => $this->input->post('assetLifetime'),
			'depreciation_rate'    => $this->input->post('asset_dep_rate'),
			'warrenty_period'      => $this->input->post('assetWarranty'),
			'Maintain_status'      => $this->input->post('asset_maintain_status'),
			'vendor'               => $this->input->post('assetVendor'),
			'disposal_date'        => $this->input->post('asset_disposal_date'),
			'remark'               => $this->input->post('asset_remark'),
			'dataInputer'          => $this->input->post('user_id'),
			'authorize'            => 0,
		);

		$res = $this->db->insert('Asset_Details', $asset_data);
		if ($res) {
			return true;
		}

	}

    function getall(){
        $sql = "SELECT * FROM Asset_Details";
        $query = $this->db->query($sql);
        return $query->result();
    }

		function getUnauthorizedData(){
        $sql = "SELECT PABC_serial_number,asset_category,cia_value,location,dataInputer FROM Asset_Details WHERE authorize=0 ";
        $query = $this->db->query($sql);
        return $query;
    }

    function getCategory(){
        $sql = "SELECT cat_id AS id, cat_name AS text FROM Asset_category";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
