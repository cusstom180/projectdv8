   	<?php
    class Migration_createPage extends CI_Migration {
        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 20,
                ),
                'title' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'slug' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
            ));
            $this->dbforge->add_key('id');
            $this->dbforge->create_table('page');
        }
        public function down()
        {
            $this->dbforge->drop_table('page');
        }
    }
