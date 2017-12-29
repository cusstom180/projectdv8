<?php
class Admin extends MY_Controller {
    
    function __construct() {
        
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin_m');
    }
    
    public function index() {
        
        $rules = $this->admin_m->rules_login;
        $this->form_validation->set_rules($rules);
       
        if ($this->form_validation->run() == true)
        {
            $data = $this->admin_m->arrayFromPost(array('email', 'password'));
            
            $this->data['login'] = $this->admin_m->getBy($data);
            
            $this->load->view('Admin/success', $this->data);
            
        }
        
        
        //load the page view
        $this->data['subview'] = 'Admin/login';
        $this->load->view('Admin/_mainlayout', $this->data);
    }
    
    public function login() {
        
        $data = $this->admin_m->arrayFromPost(array('email', 'password'));
        //var_dump($data);
        $result = $this->admin_m->loginProcess($data);
        print_r($result);
        //echo is_array($data);
        if ($result === true) {
            echo 'in if stmt';
            $name = $this->admin_m->getByArray('user', 'email', $data);
            $this->session->set_userdata('name', $name);
            $this->session->set_userdata('email', $data['email']);
            $this->session->set_userdata('loggedIn', true);
            
            //redirect('admin/account');
            
        }
        else {
            echo 'something went wrong';
        }
        
        //echo var_dump($data);
        //echo var_dump($result);
        //echo var_dump($name);
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
                $this->data['subview'] = 'admin/success';
            }
            
        }
        
        //load the page view
        $this->data['subview'] = 'admin/form';
        $this->load->view('admin/_mainlayout', $this->data);
    }
    
    public function account(){
        
        if($this->session->loggedIn === true ) {
            
            $data = array(
                'name' => $this->session->name,
                'email'=> $this->session->email,
                'loggedIn'=> $this->session->loggedIn,
            );
            
            echo var_dump($data);
        } else {
            
            $this->session->set_flashdata('error', 'Please login in again');
            
            //load the page view
            $this->data['subview'] = 'admin/login';
            $this->load->view('admin/_mainlayout', $this->data);
            //redirect('admin');
        }
    }
    
    public function  logout() {
        
        $this->admin_m->logout();
        redirect('admin');
    }
    
}