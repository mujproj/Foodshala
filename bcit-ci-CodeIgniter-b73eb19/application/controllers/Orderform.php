<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderform extends CI_Controller{
    public function __constructor(){
        parent::__constructor();
        $this->load->database();
    }

    public function index(){
        $this->load->helper('url');
        // $a['r'] = $_POST['id1'];
        $this->load->view('orderform');
        $this->load->model('Orderform_Model');
        if($this->input->post('placeorder'))
        {
            $itemName = $this->input->post('itemName');
            $address = $this->input->post('address');
            $price = $this->input->post('price');
            $phone = $this->input->post('phone');
            $emailID = $this->input->post('emailID');
            $rName = $this->input->post('rName');
            $option1 = $this->input->post('option1');
            $option2 = $this->input->post('option2');
            $customerName =$this->input->post('customerName');
            $categroy = $this->input->post('categroy');
            $this->Orderform_Model->saverecords($itemName, $address, $price, $phone, $emailID, $rName, $option1, $option2, $customerName, $categroy);
            redirect('Menu');
        }
    }
}