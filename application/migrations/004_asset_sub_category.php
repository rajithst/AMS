<?php

/**
 * Migration class for create , asset category table
 */
class Migration_asset_sub_category extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'sub_cat_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'sub_category'=>array(
        'type'=> 'VARCHAR',
        'constraint'=> 150
      ),

      'category_id'=>array(
        'type'=> 'INT',
        'constraint'=> 11
      )

    ));

    $this->dbforge->add_key('sub_cat_id',TRUE);
    $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (category_id) REFERENCES Asset_category(cat_id) ON DELETE CASCADE ON UPDATE CASCADE');
    $this->dbforge->create_table('Asset_sub_category');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_sub_category');
  }

}

 ?>
