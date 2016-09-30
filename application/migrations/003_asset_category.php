<?php

/**
 * Migration class for create , asset category table
 */
class Migration_asset_category extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'cat_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'categories'=>array(
        'type'=>'VARCHAR',
        'constraint'=>100,

      )

    ));

    $this->dbforge->add_key('cat_id',TRUE);
    $this->dbforge->create_table('Asset_category');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_category');
  }

}

 ?>
