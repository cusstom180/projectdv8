<?php
    class Migration_createSession extends CI_Migration {
        public function up()
        {
            $fields = array(
                'id VARCHAR(128) DEFAULT \'0\' NOT NULL',
                'ip_address VARCHAR(45) DEFAULT \'0\' NOT NULL',
                'timestamp INT(10) unsigned DEFAULT 0 NOT NULL',
                'data blob NOT NULL'
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->create_table('ci_session');
            $this->db->query('ALTER TABLE `ci_session` ADD KEY `ci_session_timestamp` (`timestamp`)');
        }
        public function down()
        {
            $this->dbforge->drop_table('ci_session');
        }
    }