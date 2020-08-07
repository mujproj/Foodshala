<?php
class Customer_Register_Model extends CI_Model
{
    function saverecords($emailID, $category, $pass)
    {
        $query = "insert into customerRegistration values('$emailID', '$category', '$pass')";
        $this->db->query($query);
    }
}