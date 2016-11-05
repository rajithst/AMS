<?php

/**
 * Migration class for create , asset vendor table
 */
class Migration_asset_vendor extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'vendor_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'vendor'=>array(
        'type'=>'VARCHAR',
        'constraint'=>100,

      )

    ));

    $this->dbforge->add_key('vendor_id',TRUE);
    $this->dbforge->create_table('Asset_vendor');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_vendor');
  }

}

 ?>
