<?php
class Index extends MY_Controller {
    
    function __construct() {
        
        parent::__construct();
        $this->load->model('home_m');
        $this->data['img']['row'] = $this->home_m->likeString('logo', 'img');
        
    }
    
    public function index() {
        $this->data['trace'] = $this->home_m->callingBack();
        var_dump($this->data['trace']);
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/Index';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function gettingstarted() {
        
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/getting_started';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function programs() {
        
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/programs';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function membership() {
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //get all memberships
        $this->data['membership'] = $this->home_m->getAll('id');
        
        //load the page view
        $this->data['subview'] = 'front/membership';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function schedule() {
        
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/schedule';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function coaches() {
        
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/coaches';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function community() {
        
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/community';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function wodify() {
        
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //get wodify link by id 
        $id = $this->home_m->getPost('id');
        $this->data['wodify'] = $this->home_m->getByString('wodify', 'id', $id);
     
        //load the page view
        $this->data['subview'] = 'front/wodify';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function contact() {
        
        //get page title
        $this->data['slug'] = __FUNCTION__;
        $this->data['meta'] = $this->home_m->getByString('page', 'slug', $this->data['slug']);
        
        //load the page view
        $this->data['subview'] = 'front/contact';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
}
