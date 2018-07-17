<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EstudioTipo_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getEstudiosTipos() {
        $this->db->order_by("nombre", "asc");
        $query = $this->db->get('estudio');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getEstudioTipo($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('estudio');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearEstudioTipo($nombre) {

        $data = array(
            'nombre' => $nombre
        );

        $result = $this->db->insert('estudio', $data);
        return $result;
    }

    function editarEstudioTipo($id, $nombre) {
        $data = array(
            'nombre' => $nombre
        );
        $this->db->where('id', $id);
        $result = $this->db->update('estudio', $data);
        return $result;
    }

    function eliminarEstudioTipo($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('estudio');
        return $result;
    }
}
