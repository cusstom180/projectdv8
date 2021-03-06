<?php
class Index extends MY_Controller {
    
    function __construct() {
        
        parent::__construct();
        $this->load->model('home_m');
        $this->load->helper('security');
        $this->data['img']['row'] = $this->home_m->likeString('logo', 'img');
        
    }
    
    public function index() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        //form set up
        /*$rules = $this->home_m->rules_leads;
        $this->form_validation->set_rules($rules);
        
         if ($this->form_validation->run() == true) {
            
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
            );
            $data = $this->security->xss_clean($data);
            
            $this->insert($data);
            
        } */
        
        
        
        //load the page view
        $this->data['subview'] = 'front/Index';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function gettingstarted() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        
        //load the page view
        $this->data['subview'] = 'front/getting_started';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function programs() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        
        //load the page view
        $this->data['subview'] = 'front/programs';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function membership($program = null) {
        
        //link to relative page - need to work on this
        /* if ($program != null) {
            $anchorTag = $this->home_m->arrayFromPost($program);
            var_dump($program);
        } */
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        
        //get all memberships
        $this->data['membership'] = $this->home_m->getAll('membership');
        
        //load the page view
        $this->data['subview'] = 'front/membership';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function schedule() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/schedule';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function coaches() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/coaches';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function community() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        //get community entries in db
        $this->data['community'] = $this->home_m->getAll('community');
        
        //load the page view
        $this->data['subview'] = 'front/community';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function wodify() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        //get wodify link by id 
        $id = $this->home_m->getPost('id');
        $this->data['wodify'] = $this->home_m->getByString('wodify', 'id', $id);
     
        //load the page view
        $this->data['subview'] = 'front/wodify';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function contact() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/contact';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function thankyou() {
        
        //get page title
        $this->data['slug'] = $this->home_m->callingBack();
        $this->data['title'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        $this->data['meta'] = $this->home_m->getByString('metadata', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/thankyou';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function insert() {
        //$this->data['form'] = false;
        
        if ($this->input->post('check', true)) {
            $fname = $this->input->post('fname', true);
            $lname = $this->input->post('lname', true);
            $email = $this->input->post('email', true);
            
            $errorEmpty = false;
            $errorEmail = false;
            
            if (empty($fname) || empty($lname) || empty($email)) {
                $this->data['form'] =  '<span class="form-error" role="alert">Please fill out all fields</span>';
                //$errorEmpty = true;
            }
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->data['form'] =  "<span class='alert alert-danger' role='alert'>Please enter in a valid e-mail!</span>";
                //$errorEmail = true;
            }
            else {
                $success = $this->home_m->insert($fname, $lname, $email);
                $this->data['form'] = 'Thank you for joining the DV8 newsletter list';
                //$this->data['form'] = true;
            }
        }
        else {
            $this->data['form'] = 'Something went wrong';
        }
        //echo $this->data['form'];
        //load the page view
        $this->load->view('front/insert', $this->data);
        
        
    }
    
}
