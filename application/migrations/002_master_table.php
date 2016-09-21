
<?php

class Migration_Master_table extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(


            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),


            'asset_category' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

            'sub_category' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),


            'asset_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

            'asset_owner' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),


            'asset_model' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),

            'manufacturer' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),


            'location' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),


            'lifetime period' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),

            'warrenty period' => array(
                'type' => 'INT',
                'constraint' => '30',
            ),



            'color' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),


            ' user_group' => array(
                'type' => 'TEXT',
                'constraint' => '100',
            ),

            'vendor' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),



        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('Master_table');
    }

    public function down()
    {
        $this->dbforge->drop_table('Master_table');
    }
}


