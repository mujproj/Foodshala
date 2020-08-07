<?php
class Orderform_Model extends CI_Model
{
    function saverecords($itemName, $address, $price, $phone, $emailID, $rName, $option1, $option2, $customerName, $categroy)
    {
        $query = "insert into foodorder values('$itemName', '$address', '$price', '$phone', '$emailID', '$rName', '$option1', '$option2', '$customerName', '$categroy')";
        $this->db->query($query);
    }
}