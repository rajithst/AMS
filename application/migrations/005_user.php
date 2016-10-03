<?php

/**
 * Migration class for create , asset category table
 */
class Migration_user extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(

      'emp_id'=>array(
        'type'=> 'INT',
        'constraint' => 11,
        'auto_increment'=> TRUE
      ),

      'user_name'=>array(
        'type'=> 'VARCHAR',
        'constraint'=> 150
      ),

      'password'=>array(
        'type'=> 'VARCHAR',
        'constraint'=> 255
      ),

      'user_group'=>array(
        'type'=> 'INT',
        'constraint'=> 11
      )

    ));

    $this->dbforge->add_key('emp_id',TRUE);
    //$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (category_id) REFERENCES Asset_category(cat_id)');
    $this->dbforge->create_table('User');

  }

  public function down()
  {
    $this->dbforge->drop_table('User');
  }

}

 ?>
