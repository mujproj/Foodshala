<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logoutrestaurant extends CI_Controller{
    public function __contructor(){
        parent::__contructor();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $this->session->unset_userdata('is_logged_in_restaurant');
        $this->load->helper('url');
        redirect('Restaurantlogin');
    }
}