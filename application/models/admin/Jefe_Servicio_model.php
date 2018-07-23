<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jefe_Servicio_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getJefeServicios() {
        $query = $this->db->get('jefe_servicio');

        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getJefeServicio($id) {
        $this->db->select('jefe_servicio.id, jefe_servicio.idEmpleado, empleado.id as idEmpleado, empleado.nombre as nombreJefe, jefe_servicio.idCargo, cargo.nombre as nombreCargo, jefe_servicio.idServicio, servicio.nombre as nombreServicio');
        $this->db->from('jefe_servicio');
        $this->db->join('empleado', 'jefe_servicio.idEmpleado = empleado.id');
        $this->db->join('cargo', 'jefe_servicio.idCargo = cargo.id');
        $this->db->join('servicio', 'jefe_servicio.idServicio = servicio.id');
        $this->db->where('jefe_servicio.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getJefeXidEmpleado($idEmpleado) {
        $this->db->select('jefe_servicio.id');
        $this->db->from('jefe_servicio');
        $this->db->where('jefe_servicio.idEmpleado', $idEmpleado);
        $query = $this->db->get();
        if ($query->num_rows() > 0) return $query->row_array();
        else return false;
    }

    function getJefeXservicio ($idServicio) {
      $this->db->select('id');
      $this->db->from('jefe_servicio');
      $this->db->where('jefe_servicio.idServicio', $idServicio);
      $query = $this->db->get();

      $id;
      foreach ($query->result() as $key => $row) $id = intval($row->id);
      return $id;
    }

    function editarJefeServicio ($idJefe, $idEmpleado) {
      $data = array(
          'idEmpleado' => $idEmpleado
      );

      $this->db->where('id', $idJefe);
      $result = $this->db->update('jefe_servicio', $data);
      return $result;
    }

    function crearJefeServicio($id, $idCargo, $idServicio, $idEspecialidad) {
        $data = array(
            'idEmpleado' => $id,
            'idCargo' => $idCargo,
            'idServicio' => $idServicio,
            'idEspecialidad' => $idEspecialidad
        );

        $result = $this->db->insert('jefe_servicio', $data);
        return $result;
    }

    function eliminarJefeServicio($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('jefe_servicio');
        return $result;
    }
}
