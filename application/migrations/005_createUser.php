    <?php
    class Migration_createUser extends CI_Migration {
        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 20,
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'password' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ),
                'name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '250',
                ),
            ));
            $this->dbforge->add_key('id');
            $this->dbforge->create_table('user');
        }
        public function down()
        {
            $this->dbforge->drop_table('user');
        }
    }
