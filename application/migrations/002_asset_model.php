
<?php

class Migration_asset_model extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(

				'model_id' 				 => array(
					'type'           => 'INT',
					'constraint'     => 11,
					'auto_increment' => TRUE
				),

				'model' => array(
					'type'          => 'VARCHAR',
					'constraint'    => '100',
				),


			));
		$this->dbforge->add_key('model_id', TRUE);
		$this->dbforge->create_table('Asset_model');
	}

	public function down() {
		$this->dbforge->drop_table('Asset_model');
	}
}
