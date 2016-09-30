<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function getServices()
    {
        $query = $this->db->get('servicios');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
}
