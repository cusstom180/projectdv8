<?php
class Home_m extends MY_Model {
    
    protected $_tableName = 'img';
    
    function __construct() {
        
    }
    
    public function likeString($str, $table) {
        
        $this->db->from($table);
        $query = $this->db->like('src', $str);
        return $result = $this->db->get()->result_array();
        
    }
    
    public function getByString($table, $where, $str) {
        
        $this->db->from($table);
        $query = $this->db->where($where, $str);
        echo $this->db->last_query();
        return $result = $this->db->get()->result_array();
        
    }
    
    public function getPost($str) {
        

        $value = $this->input->post_get($str);
        return $value;
    }
    
    public function getAll(){
        
        $query = $this->db->get('membership')->result_array();
        return $query;
    }
    
    public function callingBack(){
        
        $call = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1);
        foreach ($call as $key=>$value) {
            if($key == 'function') {
                $func = $value;
            }
        }
        return $func;
    }
    
    
    
}