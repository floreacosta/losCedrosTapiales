<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_model extends CI_Model {
    function __construct() {
      parent::__construct();
      $this->load->database();
    }

    function getServices () {
      $this->db->select('servicio.id, servicio.nombre, servicio.descripcion, empleado.nombre as jefe, cargo.nombre as titulo');
      $this->db->from('jefe_servicio');
      $this->db->join('empleado', 'jefe_servicio.idEmpleado = empleado.id');
      $this->db->join('cargo', 'jefe_servicio.idCargo = cargo.id');
      $this->db->join('servicio', 'jefe_servicio.idServicio = servicio.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }
}
