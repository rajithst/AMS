<?php

/**
 * Migration class for create , asset manufacturer table
 */
class Migration_asset_manufacture extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'manufacture_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'manufacture'=>array(
        'type'=>'VARCHAR',
        'constraint'=>100,

      )

    ));

    $this->dbforge->add_key('manufacture_id',TRUE);
    $this->dbforge->create_table('Asset_manufacture');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_manufacture');
  }

}

 ?>
