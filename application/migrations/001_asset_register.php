
<?php

class Migration_Asset_register extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(

				'id'              => array(
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
				),
				'date'        => array(
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
					'type'          => 'VARCHAR',
					'constraint'    => '100',
				),

				'sub_category' => array(
					'type'        => 'VARCHAR',
					'constraint'  => '100',
				),

				'CIA'         => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

				'asset_owner' => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
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
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

				'manufacturer' => array(
					'type'        => 'VARCHAR',
					'constraint'  => '100',
				),

				'OS_version'  => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

				'location'    => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

				'asset_classification' => array(
					'type'                => 'VARCHAR',
					'constraint'          => '100',
				),

				'color'       => array(
					'type'       => 'VARCHAR',
					'constraint' => '30',
				),

				'lifetime_period' => array(
					'type'           => 'VARCHAR',
					'constraint'     => '30',
				),

				'deprecialtion_rate' => array(
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

				'vendor'      => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

				'disposal_date' => array(
					'type'         => 'DATETIME',
					'constraint'   => '6',
				),

				'remark'      => array(
					'type'       => 'VARCHAR',
					'constraint' => '100',
				),

			));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('Asset_Details');
	}

	public function down() {
		$this->dbforge->drop_table('Asset_Details');
	}
}
