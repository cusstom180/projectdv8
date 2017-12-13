<?php
class Admin_M extends MY_Model {
    
    protected $_tableName = 'user';
    
    public $rules_login = array(
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        ),
    );

    public $rules_insert = array(
        'name' => array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required'
        ),
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|is_unique[user.email]|valid_email'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|matches[confirm_password]'
        ),
        'password_confirm' => array(
            'field' => 'confirm_password',
            'label' => 'Confirm Password',
            'rules' => 'trim|required'
        ),
    );
    
    public function insert($array) {
        
        $this->db->insert('user', $array);
    }
    
    public function getBy($value) {
        
        $this->db->from($this->_tableName);
        $this->db->where($value);
       
        if ($this->db->get() == true) {
            $result = true;
        } else {
            $result = false;
        }
        
        return $result;
    }
    
}


