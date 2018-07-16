<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autoridad_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getAutoridades() {
      $this->db->order_by('empleado.nombre', "asc");
      $this->db->select("empleado.nombre as `nombre`, empleado.sexo as `sexo`, empleado.titulo as `titulo`, autoridad.id as `id`, autoridad.cargo as `cargo`");
      $this->db->join('empleado', 'empleado.id = autoridad.idEmpleado');
      $query = $this->db->get('autoridad');
      if ($query->num_rows() > 0) return $query;
      else return false;
    }

    function getAutoridad($id) {
      $this->db->where('id', $id);
      $query = $this->db->get('autoridad');
      if ($query->num_rows() > 0) return $query;
      else return false;
    }

    function crearAutoridad($idEmpleado) {
      $data = array(
          'idEmpleado' => $idEmpleado
      );

      $this->db->insert('autoridad', $data);
      return $this->db->insert_id();
    }

    function eliminarAutoridad($idEmpleado) {
        $this->db->where('idEmpleado', $idEmpleado);
        $result = $this->db->delete('autoridad');
        return $result;
    }
}
