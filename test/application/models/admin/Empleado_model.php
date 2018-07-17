<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getEmpleados() {
        $this->db->order_by("nombre", "asc");
        $query = $this->db->get('empleado');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getEmpleado($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('empleado');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearEmpleado($nombre, $sexo, $titulo, $cv, $isDoctor) {
        $data = array(
            'nombre' => $nombre,
            'sexo' => $sexo,
            'titulo' => $titulo,
            'cv' => $cv
        );

        $this->db->insert('empleado', $data);
        return $this->db->insert_id();
    }

    function editarEmpleado($id, $nombre, $sexo, $titulo, $cv, $isDoctor) {
        $data = array(
          'nombre' => $nombre,
          'sexo' => $sexo,
          'titulo' => $titulo,
          'cv' => $cv
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
}
