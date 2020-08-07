<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customerlogin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form-validation');
        // $this->load->library('encrypt');
        // $this->load->model('register-model');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('customerLogin');

        if($this->input->post('login'))
        {
            $e = $this->input->post('emailID');
            $p = $this->input->post('pass');
            $que = $this->db->query("select emailID, pass from customerregistration where emailID='".$e."' and pass='".$p."'");
            $row = $que->num_rows();
            if($row)
            {
                $this->session->set_userdata('is_logged_in_customer', TRUE);
                $this->session->set_userdata('emailID', $e);
                // echo "SUCCCESS";
                redirect('Home');
            }
            else
            {
                echo "ERROR";
            }
        }
        $this->load->helper('url');
    }

    public function newCustomerUser(){
        $this->load->helper('url'); 
        redirect('customerRegistration/index');
    }
}