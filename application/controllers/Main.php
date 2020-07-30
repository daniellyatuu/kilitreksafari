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
        $this->load->view('content/About_us');
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

    public function destination(){
        $context['active']='destination';
        $context['title']='destinations';
        $this->load->view('header/Header', $context);
        $this->load->view('menu/Navbar');
        $this->load->view('content/Destination');
        $this->load->view('footer/Footer_text');
        $this->load->view('footer/Footer');
    }

    public function single_destination(){
        $context['active']='destination';
        $context['title']='destination';
        $this->load->view('header/Header', $context);
        $this->load->view('menu/Navbar');
        $this->load->view('content/Single_destination');
        $this->load->view('footer/Footer_text');
        $this->load->view('footer/Footer');
    }


}
?>