<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller{
    public function __constructor(){
        parent::__constructor();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $this->load->helper('url');
        $this->load->view('contactus');
        
    }
}