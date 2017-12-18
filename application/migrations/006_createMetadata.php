    <?php
    class Migration_createMetadata extends CI_Migration {
        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 20,
                ),
                'slug' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'content' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ),
            ));
            $this->dbforge->add_key('id');
            $this->dbforge->create_table('metadata');
        }
        public function down()
        {
            $this->dbforge->drop_table('metadata');
        }
    }
