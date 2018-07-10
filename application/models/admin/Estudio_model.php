<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudio_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getEstudios() {
        $this->db->order_by("nombre", "asc");
        $query = $this->db->get('estudio');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getEstudio($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('estudio');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearEstudio($nombre) {

        $data = array(
            'nombre' => $nombre
        );

        $result = $this->db->insert('estudio', $data);
        return $result;
    }

    function editarEstudio($id, $nombre) {
        $data = array(
            'nombre' => $nombre
        );
        $this->db->where('id', $id);
        $result = $this->db->update('estudio', $data);
        return $result;
    }

    function eliminarEstudio($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('estudio');
        return $result;
    }
}
