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
    
    public function getByString($table, $where, $str, $select = null) {
        //get all result if select is null
        echo is_array($select);
        if ($select == null) {
            $this->db->from($table);
            $query = $this->db->where($where, $str);;
        }
        
        if (is_array($select)) {
            
            //$this->db->select(array_keys($select));
            $this->db->from($table);
            $query = $this->db->where($select);
        }
        //get just specific select
        if ($select) {
            
            $this->db->select($select);
            $this->db->from($table);
            $query = $this->db->where($where, $str);
            echo $this->db->last_query();
            
        } 
        
       
        
        return $result = $this->db->get()->result_array();
        
    }
    
    public function getRow($table, $where, $str, $select = null) {
        
        if ($select) {
            
            $query = $this->db->select($select);
        }
        
        $query = $this->db->from($table);
        $query = $this->db->where($where, $str);
        return $result = $query->get()->row_array();
    }
    
}