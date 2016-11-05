<?php

/**
 * Migration class for create , asset classification table
 */
class Migration_asset_classification extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'classification_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'classification'=>array(
        'type'=>'VARCHAR',
        'constraint'=>100,

      )

    ));

    $this->dbforge->add_key('classification_id',TRUE);
    $this->dbforge->create_table('Asset_classification');

  }

  public function down()
  {
    $this->dbforge->drop_table('Asset_classification');
  }

}

 ?>
