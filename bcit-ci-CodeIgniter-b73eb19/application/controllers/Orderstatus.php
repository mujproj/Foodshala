<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderstatus extends CI_Controller{
    public function constructor(){
        parent::__constructor();
        $this->load->library('session');
        $this->load->database();
    }

    public function index(){
        $this->load->helper('url');
        $a = $this->session->userdata('emailID');
        $query = $this->db->query("select * from foodorder where emailID='$a'");
        $b['data'] = $query->result();
        $this->load->view('orderstatus', $b);
    }
}