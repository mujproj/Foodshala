<?php
class Restaurant_Register_Model extends CI_Model
{
    function saverecords($emailID, $restaurantName, $pass)
    {
        $query = "insert into restaurantRegistration values('$emailID', '$restaurantName', '$pass')";
        $this->db->query($query);
    }
}