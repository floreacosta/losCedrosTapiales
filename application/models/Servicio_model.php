<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_model extends CI_Model {
    function __construct() {
      parent::__construct();
      $this->load->database();
    }

    function getServices() {
      $this->db->select('servicio.id, servicio.nombre, servicio.descripcion, empleado.nombre as jefe, empleado.titulo');
      $this->db->from('servicio');
      $this->db->join('jefe_servicio', 'servicio.idJefeServicio = jefe_servicio.id');
      $this->db->join('empleado', 'jefe_servicio.idEmpleado = empleado.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }
}
