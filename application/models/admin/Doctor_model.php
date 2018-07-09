<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getDoctores() {
        $this->db->order_by("nombre", "asc");
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

    function crearDoctor($nombre, $esMedicoCabecera) {

        $data = array(
            'nombre' => $nombre
        );

        $this->db->insert('doctor', $data);
        return $this->db->insert_id();
    }

    function editarDoctor($id, $nombre, $esMedicoCabecera) {
        $data = array(
            'nombre' => $nombre
        );
        $this->db->where('id', $id);
        $result = $this->db->update('doctor', $data);
        return $result;
    }

    function eliminarDoctor($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('doctor');
        return $result;
    }
}
