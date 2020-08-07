<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        // $this->load->helper('url');
        $emailID = $this->session->userdata('emailID');
        $sess['emailID'] = $emailID;
        $this->load->view('home', $sess);
        $this->load->helper('url');
    }

    public function aboutUs(){
        $this->load->helper('url');
        redirect('Customerregistration/index');
    }
}