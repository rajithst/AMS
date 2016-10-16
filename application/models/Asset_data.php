<?php

class Asset_data extends MY_Model {

	protected $_table_name  = 'Master_table';
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
			'confidentiality'      => $this->input->post('asset_dep_rate_C'),
			'integrity'            => $this->input->post('asset_dep_rate_I'),
			'availability'         => $this->input->post('asset_dep_rate_A'),
			'asset_custodian'      => $this->input->post('asset_custodian'),
			'asset_owner'          => $this->input->post('asset_owner'),
			'asset_serial_number'  => $this->input->post('asset_serial'),
			'asset_description'    => $this->input->post('asset_description'),
			'asset_model'          => $this->input->post('asset_model'),
			'manufacturer'         => $this->input->post('asset_manufacture'),
			'OS_version'           => $this->input->post('asset_os_version'),
			'location'             => $this->input->post('asset_location'),
			'asset_classification' => $this->input->post('asset_classification'),
			'color'                => $this->input->post('asset_color'),
			'lifetime_period'      => $this->input->post('asset_lifetime'),
			'deprecialtion_rate'   => $this->input->post('asset_dep_rate'),
			'warrenty_period'      => $this->input->post('asset_warranty'),
			'Maintain_status'      => $this->input->post('asset_maintain_status'),
			'vendor'               => $this->input->post('asset_vender'),
			'disposal_date'        => $this->input->post('asset_disposal_date'),
			'remark'               => $this->input->post('asset_remark'),
		);

		$res = $this->db->insert('Asset_Details', $asset_data);
		if ($res) {
			return true;
		}

	}

    function getall(){
        $sql = "SELECT * FROM Master_table";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getCategory(){
        $sql = "SELECT cat_id AS id, cat_name AS text FROM Asset_category";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
