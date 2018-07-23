<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getSectores () {
      $query = $this->db->get('sector');

      if($query->num_rows() > 0) return $query;
      else return false;
    }

    function getJefeSectores () {
      $this->db->select('empleado.nombre, empleado.sexo, cargo.nombre as nombreCargo, sector.nombre as nombreSector');
      $this->db->from('jefe_sector');
      $this->db->join('empleado', 'jefe_sector.idEmpleado = empleado.id');
      $this->db->join('cargo', 'jefe_sector.idCargo = cargo.id');
      $this->db->join('sector', 'jefe_sector.idSector = sector.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }

    function getJefeServicios () {
      $this->db->select('empleado.nombre, empleado.sexo, cargo.nombre as nombreCargo, servicio.nombre as nombreServicio');
      $this->db->from('jefe_servicio');
      $this->db->join('empleado', 'jefe_servicio.idEmpleado = empleado.id');
      $this->db->join('cargo', 'jefe_servicio.idCargo = cargo.id');
      $this->db->join('servicio', 'jefe_servicio.idServicio = servicio.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }

    function getJefeEspecialidades () {
      $this->db->select('empleado.nombre, empleado.sexo, cargo.nombre as nombreCargo, especialidad.nombre as nombreEspecialidad');
      $this->db->from('jefe_servicio');
      $this->db->join('empleado', 'jefe_servicio.idEmpleado = empleado.id');
      $this->db->join('cargo', 'jefe_servicio.idCargo = cargo.id');
      $this->db->join('especialidad', 'jefe_servicio.idEspecialidad = especialidad.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }
}
