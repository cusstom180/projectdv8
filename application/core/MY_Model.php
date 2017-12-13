<?php
class MY_Model extends CI_Model {
    
    protected $_tableName = '';
    
    function __construct() {
        
        parent::__construct();
    }
    
    public function arrayFromPost($field) {
        
        $data = array();
        foreach ($field as $field) {
            $data[$field] = $this->input->post($field);
        }
        return $data;
    }
    
}