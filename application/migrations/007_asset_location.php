<?php

/**
 * Migration class for create , asset category table
 */
class Migration_asset_location extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'location_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'location'=>array(
        'type'=>'VARCHAR',
        'constraint'=>100,

      )

    ));

    $this->dbforge->add_key('location_id',TRUE);
    $this->dbforge->create_table('Asset_location');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_location');
  }

}

 ?>
