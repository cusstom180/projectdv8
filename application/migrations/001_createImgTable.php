    <?php
    class Migration_createImgTable extends CI_Migration {
        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'varchar',
                    'constraint' => 150,
                    'unsigned' => TRUE,
                ),
                'src' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '128',
                ),
                'alt' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'height' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
                'page' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ),
            ));
            $this->dbforge->add_key('id');
            $this->dbforge->create_table('img');
        }
        public function down()
        {
            $this->dbforge->drop_table('img');
        }
    }