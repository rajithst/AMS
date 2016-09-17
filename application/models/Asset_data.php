<?php

class Asset_data extends MY_Model{

    protected $_table_name = 'Asset_Details';
    protected $_primary_key= 'id';
    protected $return_type = 'array';





    function getall(){

        $sql = "SELECT asset_category FROM Asset_Details";
        $query = $this->db->query($sql);
        return $query->result();



    }




}