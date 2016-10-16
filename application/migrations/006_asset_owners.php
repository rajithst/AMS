<?php

/**
 * Migration class for create , asset category table
 */
class Migration_asset_owner extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'owner_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'owner_name'=>array(
        'type'=> 'VARCHAR',
        'constraint'=> 150
      )

    ));

    $this->dbforge->add_key('owner_id',TRUE);
    $this->dbforge->create_table('Asser_owner');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asser_owner');
  }

}

 ?>
