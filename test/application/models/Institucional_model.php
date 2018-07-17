<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getJefeSectores() {
      $this->db->select('empleado.nombre, empleado.sexo, jefe_sector.cargo');
      $this->db->from('jefe_sector');
      $this->db->join('empleado', 'jefe_sector.idEmpleado = empleado.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }

    function getJefeServicios() {
      $this->db->select('empleado.nombre, empleado.sexo, jefe_servicio.cargo');
      $this->db->from('jefe_servicio');
      $this->db->join('empleado', 'jefe_servicio.idEmpleado = empleado.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }
}
