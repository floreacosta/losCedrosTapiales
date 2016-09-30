<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coberturas_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function getCoberturas()
    {
        $query = $this->db->get('coberturas');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
}
