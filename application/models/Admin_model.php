<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function getDataWebsite()
    {
        return $this->db->get('project')->result_array();
    }
}