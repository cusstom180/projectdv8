    <?php
    class Migration_createwodify extends CI_Migration {
        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 20,
                ),'link' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '250',
                ),
            ));
            $this->dbforge->add_key('id');
            $this->dbforge->create_table('wodify');
        }
        public function down()
        {
            $this->dbforge->drop_table('wodify');
        }
    }
