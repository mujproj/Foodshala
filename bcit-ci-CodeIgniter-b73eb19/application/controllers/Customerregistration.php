<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customerregistration extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form-validation');
        // $this->load->library('encrypt');
        // $this->load->model('register-model');

        //load database libray manually
	    $this->load->database();
	
	    //load Model
		$this->load->model('Customer_Register_Model');
		$this->load->helper('url');
		$this->load->library('session');

    }

    public function index(){
        //load registration view form
		$this->load->view('customerRegistration');

		//Check submit button 
		if($this->input->post('save'))
		{
		    //get form's data and store in local varable
		    $n=$this->input->post('emailID');
		    $e=$this->input->post('pass');
		    $m=$this->input->post('category');

            //call saverecords method of Hello_Model and pass variables as parameter
		    $this->Customer_Register_Model->saverecords($n,$e,$m);
			// echo "Records Saved Successfully";
			redirect('Customerlogin');
		}
		$this->load->helper('url');

	}
	
	public function alreadyUser(){
		$this->load->helper('url'); 
		redirect('Customerlogin/index');

	}
}
