<?php

/**
 * Migration class for create , asset lifetime period table
 */
class Migration_asset_lifetimeperiod extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'lifetime_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'lifetime'=>array(
        'type'=>'VARCHAR',
        'constraint'=>100,

      )

    ));

    $this->dbforge->add_key('lifetime_id',TRUE);
    $this->dbforge->create_table('Asset_lifetime');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_lifetime');
  }

}

 ?>
