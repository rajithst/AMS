<?php

/**
 * Migration class for create , asset category table
 */
class Migration_asset_custodian extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'custodian_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'custodian_name'=>array(
        'type'=> 'VARCHAR',
        'constraint'=> 150
      )

    ));

    $this->dbforge->add_key('custodian_id',TRUE);
    $this->dbforge->create_table('Asset_custodian');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_custodian');
  }

}

 ?>
