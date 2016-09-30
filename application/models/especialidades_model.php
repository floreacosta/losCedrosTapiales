<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especialidades_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function getEspecialidades()
    {
        $this->db->order_by('nombre', 'ASC');
        $query = $this->db->get('especialidades');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
}
