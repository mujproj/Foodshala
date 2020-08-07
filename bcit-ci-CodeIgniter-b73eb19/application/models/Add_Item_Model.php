<?php
class Add_Item_Model extends CI_Model
{
    function saverecords($item, $rName, $category, $price)
    {
        $query = "insert into menuitem values('$item', '$rName', '$category', '$price')";
        $this->db->query($query);
    }
}