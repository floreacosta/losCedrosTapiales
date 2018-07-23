<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getEmpleados() {
        $this->db->select('empleado.id, empleado.nombre, empleado.idCargo, cargo.nombre as cargo, empleado.sexo');
        $this->db->from('empleado');
        $this->db->join('cargo', 'empleado.idCargo = cargo.id');
        $this->db->order_by("nombre", "asc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) return $query->result_array();
        else return false;
    }

    function getEmpleado($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('empleado');
        if ($query->num_rows() > 0) return $query->row_array();
        else return false;
    }

    function crearEmpleado($nombre, $idCargo, $sexo) {
        $data = array(
            'nombre' => $nombre,
            'idCargo' => $idCargo,
            'sexo' => $sexo
        );

        $this->db->insert('empleado', $data);
        return $this->db->insert_id();
    }

    function editarEmpleado($id, $nombre, $idCargo, $sexo) {
        $data = array(
          'nombre' => $nombre,
          'idCargo' => $idCargo,
          'sexo' => $sexo
        );

        $this->db->where('id', $id);
        $result = $this->db->update('empleado', $data);
        return $result;
    }

    function eliminarEmpleado($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('empleado');
        return $result;
    }

    function getCargos () {
      $query = $this->db->get('cargo');
      if ($query->num_rows() > 0) return $query->result_array();
      else return false;
    }

    function getCargo ($id) {
      $this->db->where('id', $id);
      $query = $this->db->get('cargo');
      if ($query->num_rows() > 0) return $query->result_array();
      else return false;
    }

    function getOpcionesSexo () {
      $m = array(
        'id' => 'M',
        'nombre' => 'M'
      );

      $f = array(
        'id' => 'F',
        'nombre' => 'F'
      );

      $sexo = array($f, $m);

      return $sexo;
    }
}
