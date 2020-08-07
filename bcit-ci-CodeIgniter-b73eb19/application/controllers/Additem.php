<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additem extends CI_Controller{
    public function __constructor(){
        parent::__constructor();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        
    }

    public function index(){
        $rName = $this->session->userdata('restaurantName');
        $a['rName'] = $rName;
        $this->load->helper('url');
        $this->load->view('addItem', $a);
        $this->load->model('Add_Item_Model');
        if($this->input->post('Add'))
        {
            $item = $this->input->post('itemName');
            $category = $this->input->post('category');
            $price = $this->input->post('price');
            $rName = $this->session->userdata('restaurantName');
            $this->Add_Item_Model->saverecords($item, $rName, $category, $price);
            redirect('Home');
        }
    }
}