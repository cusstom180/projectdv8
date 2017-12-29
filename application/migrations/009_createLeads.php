   	<?php
    class Migration_createLeads extends CI_Migration {
        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 20,
                ),
                'first_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'last_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '500',
                ),
            ));
            $this->dbforge->add_key('id');
            $this->dbforge->create_table('leads');
        }
        public function down()
        {
            $this->dbforge->drop_table('leads');
        }
    }

