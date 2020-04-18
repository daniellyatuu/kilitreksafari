<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Main extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $context['active']='index';
        $context['title']='home';
        $this->load->view('header/Header', $context);
        $this->load->view('menu/Navbar');
        $this->load->view('content/Home');
        $this->load->view('footer/Footer_text');
        $this->load->view('footer/Footer');
    }


    public function about(){
        $context['active']='about';
        $context['title']='about';
        $this->load->view('header/Header', $context);
        $this->load->view('menu/Navbar');
        $this->load->view('content/About');
        $this->load->view('footer/Footer_text');
        $this->load->view('footer/Footer');
    }

    public function contact(){
        $context['active']='contact';
        $context['title']='contact us';
        $this->load->view('header/Header', $context);
        $this->load->view('menu/Navbar');
        $this->load->view('content/Contact');
        $this->load->view('footer/Footer_text');
        $this->load->view('footer/Footer');
    }

    public function gallery(){
        $context['active']='gallery';
        $context['title']='gallery';
        $this->load->view('header/Header', $context);
        $this->load->view('menu/Navbar');
        $this->load->view('content/Gallery');
        $this->load->view('footer/Footer_text');
        $this->load->view('footer/Footer');
    }

}
?>