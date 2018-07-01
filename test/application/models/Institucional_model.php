<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getAutoridades() {
      $this->db->select('empleado.nombre, empleado.imagen, empleado.sexo, autoridad.cargo, autoridad.cv');
      $this->db->from('autoridad');
      $this->db->join('empleado', 'autoridad.idEmpleado = empleado.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }
}
