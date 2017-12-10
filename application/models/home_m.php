<?php
class Home_m extends MY_Model {
    
    protected $_tableName = 'img';
    
    function __construct() {
        
    }
    
    public function getNavbarImg() {
        
        $id = array('1', '2');
        $this->db->from($this->_tableName);
        $query = $this->db->where_in('id', $id);
        return $result = $this->db->get()->result_array();
        
    }
    
    public function getByString($str) {
        
        $this->db->from($this->_tableName);
        $query = $this->db->like('src', $str);
        return $result = $this->db->get()->result_array();
        
    }
    
    public function getPost($str) {
        

        $value = $this->input->post_get($str);
        return $value;
    }
    
    public function getWodifyView($str) {
        
        $this->db->from('wodify');
        $query = $this->db->where('id', $str);
        $subview = $this->db->get()->result_array();
        return $subview;
    }
    
    public function getAll(){
        
        $query = $this->db->get('program')->result_array();
        return $query;
    }
    
    
}