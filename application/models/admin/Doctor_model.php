<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getDoctores() {
      $this->db->order_by('empleado.nombre', "asc");
      $this->db->select("empleado.nombre as `nombre`, empleado.sexo as `sexo`, empleado.titulo as `titulo`, doctor.id as `id`");
      $this->db->join('empleado', 'empleado.id = doctor.idEmpleado');
      $query = $this->db->get('doctor');
      if ($query->num_rows() > 0) return $query;
      else return false;
    }

    function getDoctor($id) {
      $this->db->where('id', $id);
      $query = $this->db->get('doctor');
      if ($query->num_rows() > 0) return $query;
      else return false;
    }

    function crearDoctor($idEmpleado) {
      $data = array(
          'idEmpleado' => $idEmpleado
      );

      $this->db->insert('doctor', $data);
      return $this->db->insert_id();
    }

    function eliminarDoctor($idEmpleado) {
        $this->db->where('idEmpleado', $idEmpleado);
        $result = $this->db->delete('doctor');
        return $result;
    }
}
