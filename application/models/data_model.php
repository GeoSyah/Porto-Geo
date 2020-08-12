<?php
defined('BASEPATH') or exit ("NO ACCESS ALLOWED");

class Data_model extends CI_Model
{
    function getData()
    {
        return $this->db->get('identitas', 1);
    }
}