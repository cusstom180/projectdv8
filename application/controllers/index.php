<?php
class Index extends MY_Controller {
    
    function __construct() {
        
        parent::__construct();
        $this->load->model('home_m');
        $this->data['img']['row'] = $this->home_m->getByString('logo');
    }
    
    public function index() {
        
        //load the page view
        $this->data['subview'] = 'front/index';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function gettingstarted() {
        
        //load the page view
        $this->data['subview'] = 'front/getting_started';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function programs() {
        
        //load the page view
        $this->data['subview'] = 'front/programs';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
    public function membership() {
        
        $this->data['membership'] = $this->home_m->getAll('id');
        
        //load the page view
        $this->data['subview'] = 'front/membership';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function schedule() {
        
        //load the page view
        $this->data['subview'] = 'front/schedule';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function coaches() {
        
        //load the page view
        $this->data['subview'] = 'front/coaches';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function community() {
        
        //load the page view
        $this->data['subview'] = 'front/community';
        $this->load->view('front/_mainlayout', $this->data);;
    }
    
    public function wodify() {
        
        $id = $this->home_m->getPost('id');
        $this->data['wodify'] = $this->home_m->getWodifyView($id);
        
;        
        //load the page view
        $this->data['subview'] = 'front/wodify';
        $this->load->view('front/_mainlayout', $this->data);
    }
    
}
