<?php

/**
 * Migration class for create , asset warranty table
 */
class Migration_asset_warranty extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'warranty_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'warranty'=>array(
        'type'=>'VARCHAR',
        'constraint'=>100,

      )

    ));

    $this->dbforge->add_key('warranty_id',TRUE);
    $this->dbforge->create_table('Asset_warranty');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_warranty');
  }

}

 ?>
