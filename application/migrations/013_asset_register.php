
<?php

class Migration_Asset_register extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(

				'asset_id'              => array(
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
				),
				'added_date'        => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

				'PABC_serial_number' => array(
					'type'              => 'VARCHAR',
					'constraint'        => '100',
				),

				'reference_number' => array(
					'type'            => 'VARCHAR',
					'constraint'      => '100',
				),

				'asset_category' => array(
					'type'          => 'INT',
					'constraint'    => '11',
				),

				'asset_sub_category' => array(
					'type'        => 'INT',
					'constraint'  => '11',
				),

				'confidentiality' => array(
					'type'       => 'INT',
					'constraint' => '10',
				),

				'integrity' => array(
					'type'       => 'INT',
					'constraint' => '10',
				),
				'availability' => array(
					'type'       => 'INT',
					'constraint' => '10',
				),
				'cia_value' => array(
					'type'       => 'FLOAT',
				),

				'asset_custodian' => array(
					'type'       => 'INT',
					'constraint' => '11',
				),

				'asset_owner' => array(
					'type'       => 'INT',
					'constraint' => '11',
				),

				'asset_serial_number' => array(
					'type'               => 'VARCHAR',
					'constraint'         => '100',
				),

				'asset_description' => array(
					'type'             => 'VARCHAR',
					'constraint'       => '250',
				),

				'asset_model' => array(
					'type'       => 'INT',
					'constraint' => '11',
				),

				'asset_manufacturer' => array(
					'type'        => 'INT',
					'constraint'  => '11',
				),

				'OS_version'  => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

				'asset_location'    => array(
					'type'       => 'INT',
					'constraint' => '11',
				),

				'asset_classification' => array(
					'type'                => 'INT',
					'constraint'          => '11',
				),

				'color'       => array(
					'type'       => 'VARCHAR',
					'constraint' => '30',
				),

				'lifetime_period' => array(
					'type'           => 'INT',
					'constraint'     => '11',
				),

				'depreciation_rate' => array(
					'type'              => 'DECIMAL',
					'constraint'        => '30',
				),

				'warrenty_period' => array(
					'type'           => 'INT',
					'constraint'     => '30',
				),

				'Maintain_status' => array(
					'type'           => 'VARCHAR',
					'constraint'     => '100',
				),

				'asset_vendor'      => array(
					'type'       => 'INT',
					'constraint' => '11',
				),

				'disposal_date' => array(
					'type'         => 'DATE',

				),

				'remark'      => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

				'dataInputer'  => array(
					'type'       => 'INT',
					'constraint' => '11',
				),

				'authorize'      => array(
					'type'       => 'INT',
					'constraint' => '1',
				),

			));
		$this->dbforge->add_key('asset_id', TRUE);
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_category) REFERENCES Asset_category(cat_id)  ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_sub_category) REFERENCES Asset_sub_category(sub_cat_id)  ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_custodian) REFERENCES Asset_custodian(custodian_id)  ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_owner) REFERENCES Asset_owner(owner_id) ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_model) REFERENCES Asset_model(model_id) ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_manufacturer) REFERENCES Asset_manufacture(manufacture_id) ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_location) REFERENCES Asset_location(location_id) ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_classification) REFERENCES Asset_classification(classification_id) ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (lifetime_period) REFERENCES Asset_lifetime(lifetime_id) ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (warrenty_period) REFERENCES Asset_warranty(warranty_id) ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (asset_vendor) REFERENCES Asset_vendor(vendor_id) ON DELETE CASCADE');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (dataInputer) REFERENCES user(id) ON DELETE CASCADE');

		//loation relationship
		$this->dbforge->create_table('Asset_Details');
	}

	public function down() {
		$this->dbforge->drop_table('Asset_Details');
	}
}
