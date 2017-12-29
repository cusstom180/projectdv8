   	<?php
    class Migration_createCommunity extends CI_Migration {
        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 20,
                ),
                'bus_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'contact_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'description' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '500',
                ),
                'address_1' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'address_2' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'phone' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'image' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
            ));
            $this->dbforge->add_key('id');
            $this->dbforge->create_table('community');
        }
        public function down()
        {
            $this->dbforge->drop_table('community');
        }
    }

