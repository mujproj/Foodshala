<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurantregistration extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        //load database libray manually
	    $this->load->database();
	
	    //load Model
        $this->load->model('Restaurant_Register_Model');
        $this->load->helper('url');
        $this->load->library('session');

    }

    public function index(){

        $this->load->view('restaurantRegistration');

        if($this->input->post('Register'))
		{
		    //get form's data and store in local varable
		    $n=$this->input->post('emailID');
		    $e=$this->input->post('pass');
		    $m=$this->input->post('restaurantName');
            // $this->session->set_userdata('restaurantName', $m);
            //call saverecords method of Hello_Model and pass variables as parameter
            $this->Restaurant_Register_Model->saverecords($n,$m,$e);
            redirect('Restaurantlogin');
		    // echo "Records Saved Successfully";
		}
        $this->load->helper('url');
    }

    public function oldUser(){
        $this->load->helper('url'); 
        redirect('Restaurantlogin/index');
    }
}