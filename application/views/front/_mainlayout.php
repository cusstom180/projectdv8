<?php 
$this->load->view('front/components/header');
$this->load->view('front/components/navbar', $img);
$this->load->view($subview); 

$this->load->view('front/components/footer'); ?>
