<?php
class Admin extends MY_Controller {
    
    function __construct() {
        
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('admin_m');
    }
    
    public function index() {
        
        $rules = $this->admin_m->rules_login;
        $this->form_validation->set_rules($rules);
       
        if ($this->form_validation->run() == true)
        {
            $data = $this->admin_m->arrayFromPost(array('email', 'password'));
            
            $this->data['login'] = $this->admin_m->getBy($data);
            
            $this->load->view('admin/success', $this->data);
            
        }
        
        
        //load the page view
        $this->data['subview'] = 'admin/login';
        $this->load->view('admin/_mainlayout', $this->data);
    }
    
    public function login() {
        
        echo 'hi';
    }
    
    public function insert() {
        
        echo 'insert page';
        
        $rules = $this->admin_m->rules_insert;
        $this->form_validation->set_rules($rules);
        
        if ($this->form_validation->run() == true)
        {
            $data = $this->admin_m->arrayFromPost(array('name', 'email', 'password'));
            
            if (!empty($data['password'])) {
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
                $this->admin_m->insert($data);
                
            }
            
            $this->load->view('admin/success', $data);
            
        }
        
    }
    
}