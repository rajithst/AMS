<?php

class Asset_data extends MY_Model{

    protected $_table_name = 'Master_table';
    protected $_primary_key= 'id';
    protected $return_type = 'array';


    function getall(){
        $sql = "SELECT * FROM Master_table";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getCategory(){
        $sql = "SELECT cat_id AS id, cat_name AS text FROM Asset_category";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
