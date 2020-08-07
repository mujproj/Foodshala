<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
    }

    public function index(){
        $query = $this->db->query("select * from menuitem");
        $result['data'] = $query->result();
        $this->load->view('menu', $result);
        $this->load->helper('url');
        // $this->session->set_userdata('price', 1);
    }
}