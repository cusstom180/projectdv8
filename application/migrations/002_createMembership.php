    <?php
    class Migration_createMembership extends CI_Migration {
        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 20,
                ),'program' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ),'name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '150',
                ),
                'price' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '150',
                ),
                'line_1' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
                ),
                'line_2' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
                ),
                'line_3' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
                ),
            ));
            $this->dbforge->add_key('id');
            $this->dbforge->create_table('membership');
        }
        public function down()
        {
            $this->dbforge->drop_table('membership');
        }
    }