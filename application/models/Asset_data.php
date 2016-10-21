<?php

class Asset_data extends MY_Model {

	protected $_table_name  = 'Asset_Details';
	protected $_primary_key = 'id';
	protected $return_type  = 'array';

	function register() {

		$date       = date("Y/m/d");
		$asset_data = array(

			'added_date'                 => $date,
			'PABC_serial_number'   => $this->input->post('pabc_serial'),
			'reference_number'     => $this->input->post('reference_num'),
			'asset_category'       => $this->input->post('asset_category'),
			'asset_sub_category'   => $this->input->post('sub_category'),
			'confidentiality'      => $this->input->post('asset_rate_C'),
			'integrity'            => $this->input->post('asset_rate_I'),
			'availability'         => $this->input->post('asset_rate_A'),
			'cia_value'            => $this->input->post('asset_value'),
			'asset_custodian'      => $this->input->post('assetCustodian'),
			'asset_owner'          => $this->input->post('assetOwner'),
			'asset_serial_number'  => $this->input->post('assetSerial'),
			'asset_description'    => $this->input->post('assetDescription'),
			'asset_model'          => $this->input->post('assetModel'),
			'asset_manufacturer'   => $this->input->post('assetManufacture'),
			'OS_version'           => $this->input->post('asset_os_version'),
			'asset_location'       => $this->input->post('asset_location'),
			'asset_classification' => $this->input->post('assetClassification'),
			'color'                => $this->input->post('asset_color'),
			'lifetime_period'      => $this->input->post('assetLifetime'),
			'depreciation_rate'    => $this->input->post('asset_dep_rate'),
			'warrenty_period'      => $this->input->post('assetWarranty'),
			'Maintain_status'      => $this->input->post('asset_maintain_status'),
			'asset_vendor'         => $this->input->post('assetVendor'),
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

    function getAll(){
        $sql = "SELECT asset_id,PABC_serial_number,category,cia_value,location,disposal_date FROM Asset_Details,Asset_category,Asset_location WHERE authorize=1 AND Asset_Details.asset_category = Asset_category.cat_id AND Asset_Details.asset_location=Asset_location.location_id ";
        $query = $this->db->query($sql);
        return $query;
    }

    function getDisposable(){
        $sql = "SELECT asset_id,PABC_serial_number,category,disposal_date FROM Asset_Details,Asset_category WHERE authorize=1  AND Asset_Details.asset_category = Asset_category.cat_id AND disposal_date between CURDATE() and DATE_ADD(CURDATE(),INTERVAL 6 MONTH) order by disposal_date desc";
        $query = $this->db->query($sql);
        return $query;
    }

		function getCategoryData(){
			$sql = "SELECT category,COUNT(category) AS total FROM Asset_Details,Asset_category WHERE authorize=1  AND Asset_Details.asset_category = Asset_category.cat_id GROUP BY asset_category";
			$query = $this->db->query($sql);
			return $query;
		}

		function getUnauthorizedData(){
        //$sql = "SELECT id,PABC_serial_number,asset_category,cia_value,location,dataInputer FROM Asset_Details WHERE authorize=0 ";
				$sql = "SELECT asset_id,PABC_serial_number,category,cia_value,location,user_name FROM Asset_Details,Asset_category,Asset_location,user WHERE authorize=0 AND Asset_Details.asset_category = Asset_category.cat_id AND Asset_Details.asset_location=Asset_location.location_id AND Asset_Details.dataInputer = user.id";
				$query = $this->db->query($sql);
        return $query;
    }

		function getAssetId(){
			$sql = "SELECT asset_id FROM Asset_Details ORDER BY asset_id DESC LIMIT 1 ";
			$query = $this->db->query($sql);
			return $query->result();
		}

		function getAssetData($asset_id){
				$sql = "SELECT
									asset_id,added_date,PABC_serial_number,reference_number,category,
									sub_category,confidentiality,integrity,availability,cia_value,custodian,
									owner,asset_serial_number,asset_description,model,manufacture,
									OS_version,location,classification,color,lifetime,depreciation_rate,
									warranty,Maintain_status,vendor,disposal_date,remark,id
								FROM
									Asset_category,Asset_sub_category,Asset_owner,Asset_custodian,Asset_model,
									Asset_manufacture,Asset_location,Asset_classification,Asset_lifetime,Asset_warranty,
									Asset_vendor,user,Asset_Details
								WHERE
									asset_id='$asset_id' AND
									Asset_Details.asset_category = Asset_category.cat_id AND
									Asset_Details.asset_sub_category = Asset_sub_category.sub_cat_id AND
									Asset_Details.asset_custodian = Asset_custodian.custodian_id AND
									Asset_Details.asset_owner = Asset_owner.owner_id AND
									Asset_Details.asset_model = Asset_model.model_id AND
									Asset_Details.asset_manufacturer = Asset_manufacture.manufacture_id AND
									Asset_Details.asset_location = Asset_location.location_id AND
									Asset_Details.asset_classification = Asset_classification.classification_id AND
									Asset_Details.lifetime_period = Asset_lifetime.lifetime_id AND
									Asset_Details.warrenty_period = Asset_warranty.warranty_id AND
									Asset_Details.asset_vendor = Asset_vendor.vendor_id AND
									Asset_Details.dataInputer = user.id";
				$query = $this->db->query($sql);
        return $query;
		}

		function authorizeAsset(){
			$aid = $this->input->post('index');
			$sql = "UPDATE Asset_Details SET authorize=1 WHERE asset_id=$aid ";
			$query = $this->db->query($sql);
			return $query;
		}

		function disposal(){
			$aid = $this->input->post('index');
			$sql = "UPDATE Asset_Details SET authorize=111 WHERE asset_id=$aid ";
			$query = $this->db->query($sql);
			return $query;
		}

		function locationChange(){
			$aid = $this->input->post('index');
			$new_location = $this->input->post('asset_location');
			$sql = "UPDATE Asset_Details SET asset_location=$new_location WHERE asset_id=$aid ";
			$query = $this->db->query($sql);
			return $query;
		}

		function ownerChange(){
			$aid = $this->input->post('index');
			$new_owner = $this->input->post('asset_owner');
			$sql = "UPDATE Asset_Details SET asset_owner=$new_owner WHERE asset_id=$aid ";
			$query = $this->db->query($sql);
			return $query;
		}

		function reValuation(){
			$aid = $this->input->post('index');
			$new_lifetime = $this->input->post('assetLifetime');
			$new_warrenty_period = $this->input->post('assetWarranty');
			$new_depreciation_rate = $this->input->post('asset_dep_rate');
			$new_Maintain_status = $this->input->post('asset_maintain_status');
			$new_disposal_date = $this->input->post('asset_disposal_date');
			$new_remark = $this->input->post('asset_remark');

			$sql = "UPDATE Asset_Details
							SET
								lifetime_period=$new_lifetime,
								warrenty_period = $new_warrenty_period,
								depreciation_rate = $new_depreciation_rate,
								Maintain_status = $new_Maintain_status,
								disposal_date = $new_disposal_date,
								remark = $new_remark
							WHERE asset_id=$aid ";
			$query = $this->db->query($sql);
			return $query;
		}

		function rejectAsset(){
			$aid = $this->input->post('index');
			$sql = "UPDATE Asset_Details SET authorize=2 WHERE asset_id=$aid ";
			$query = $this->db->query($sql);
			return $query;
		}

		function search(){
			$search = $this->input->post('searchText');
			$sql = "SELECT
								asset_id,added_date,PABC_serial_number,reference_number,category,
								sub_category,confidentiality,integrity,availability,cia_value,custodian,
								owner,asset_serial_number,asset_description,model,manufacture,
								OS_version,location,classification,color,lifetime,depreciation_rate,
								warranty,Maintain_status,vendor,disposal_date,remark,id
							FROM
								Asset_category,Asset_sub_category,Asset_owner,Asset_custodian,Asset_model,
								Asset_manufacture,Asset_location,Asset_classification,Asset_lifetime,Asset_warranty,
								Asset_vendor,user,Asset_Details
							WHERE
								PABC_serial_number LIKE '%$search%' AND authorize=1 AND
								Asset_Details.asset_category = Asset_category.cat_id AND
								Asset_Details.asset_sub_category = Asset_sub_category.sub_cat_id AND
								Asset_Details.asset_custodian = Asset_custodian.custodian_id AND
								Asset_Details.asset_owner = Asset_owner.owner_id AND
								Asset_Details.asset_model = Asset_model.model_id AND
								Asset_Details.asset_manufacturer = Asset_manufacture.manufacture_id AND
								Asset_Details.asset_location = Asset_location.location_id AND
								Asset_Details.asset_classification = Asset_classification.classification_id AND
								Asset_Details.lifetime_period = Asset_lifetime.lifetime_id AND
								Asset_Details.warrenty_period = Asset_warranty.warranty_id AND
								Asset_Details.asset_vendor = Asset_vendor.vendor_id AND
								Asset_Details.dataInputer = user.id LIMIT 1";

			$query = $this->db->query($sql);
      return $query;
		}

}

//"SELECT	added_date,PABC_serial_number,reference_number,category,sub_category,confidentiality,integrity,availability,cia_value,custodian,owner,asset_serial_number,asset_description,model,manufacturer,	OS_version,location,classification,color,lifetime,depreciation_rate,warrenty,Maintain_status,vendor,disposal_date,remark,user_id FROM	Asset_category,Asset_sub_category,Asset_owner,Asset_custodian,Asset_model,Asset_manufacture,Asset_location,Asset_classification,Asset_lifetime,Asset_warranty,Asset_vendor,user WHERE asset_id='$asset_id' AND Asset_Details.asset_category = Asset_category.cat_id AND Asset_Details.asset_sub_category = Asset_sub_category.sub_cat_id AND Asset_Details.asset_custodian = Asset_custodian.custodian_id AND	Asset_Details.asset_owner = Asset_owner.owner_id AND	Asset_Details.asset_model = Asset_model.model_id AND	Asset_Details.asset_manufacturer = Asset_manufacture.manufacture_id AND	Asset_Details.asset_location = Asset_location.location_id AND	Asset_Details.asset_classification = Asset_classification.classification_id AND	Asset_Details.lifetime_period = Asset_lifetime.lifetime_id AND	Asset_Details.warrenty_period = Asset_warranty.warranty_id AND Asset_Details.asset_vendor = Asset_vendor.vendor_id AND Asset_Details.dataInputer = user.user_id"/
//date,PABC_serial_number,reference_number,asset_category,sub_category,confidentiality,integrity,availability,cia_valueasset_custodian,asset_owner,asset_serial_number,asset_description,asset_model,asset_manufacturer,OS_version,asset_location,asset_classification,color,lifetime_period,depreciation_rate,warrenty_period,Maintain_status,asset_vendor,disposal_date,remark,dataInputer
//asset_custodian,asset_owner,asset_serial_number,asset_description,asset_model,asset_manufacturer,OS_version,asset_location,asset_classification,color,lifetime_period,depreciation_rate,warrenty_period,Maintain_status,asset_vendor,disposal_date,remark,dataInputer
