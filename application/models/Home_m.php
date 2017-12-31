<?php
class Home_m extends MY_Model {
    
    protected $_tableName = 'img';
    
    public $rules_leads = array(
        'fname' => array(
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => 'trim|required'
        ),
        'lname' => array(
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => 'trim|required'
        ),
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|is_unique[leads.email]|valid_email'
        ),
    );
    
    function __construct() {
        
    }
    
    public function likeString($str, $table) {
        
        $this->db->from($table);
        $query = $this->db->like('src', $str);
        return $result = $this->db->get()->result_array();
        
    }
    
    /* public function getByString($table, $where, $str) {
        
        $this->db->from($table);
        $query = $this->db->where($where, $str);
        return $result = $this->db->get()->result_array();
        
    } */
    
    public function getPost($str) {
        

        $value = $this->input->post_get($str);
        return $value;
    }
    
    public function getAll($table){
        
        $query = $this->db->get($table)->result_array();
        return $query;
    }
    
    public function callingBack(){
        
        $call = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,2);
        foreach ($call as $array) {
            foreach ($array as $key=>$value) {
                if($key == 'function') {
                    $func = $value;
                }
            }
        }
        return $func;
    }
    
    public function insert($array) {
        
        //$this->db->insert('leads', $array);
        
        if ($this->db->insert('leads', $array)) {
            $mess = "Thanks for joining the DV8 newsletter list";
            echo json_encode($mess);
        }
        else {
            $mess = "Some Problem occur. Please send an email to ". mailto('crossfitdv8@gmail.com');
            echo json_encode($mess);
        }
        return $mess;
        
    }
    
}