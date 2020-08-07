<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurantlogin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        // $this->load->library('form-validation');
        // $this->load->library('encrypt');
        // $this->load->model('register-model');
    }

    public function index(){
        $this->load->view('restaurantLogin');
        if($this->input->post('Login'))
        {
            $e = $this->input->post('emailID');
            $p = $this->input->post('pass');
            $que = $this->db->query("select emailID, pass, restaurantName from restaurantregistration where emailID='".$e."' and pass='".$p."'");
            $row = $que->num_rows();
            if($row)
            {
                // echo "Success";
                $this->session->set_userdata('is_logged_in_restaurant', TRUE);
                $result = $que->result();
                foreach($result as $r){
                    $this->session->set_userdata('restaurantName', $r->restaurantName);
                }
                redirect('Home');
            }
            else
            {
                echo "Error";
            }
        }
        $this->load->helper('url');
    }

    public function newUser(){
        $this->load->helper('url'); 
        redirect('Restaurantregistration/index');
    }

}