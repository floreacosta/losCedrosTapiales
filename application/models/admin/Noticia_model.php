<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getNoticias() {
        $query = $this->db->get('noticia');
        $this->db->order_by("nombre", "asc");
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getNoticia($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('noticia');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearNoticia($nombre, $descripcion) {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );

        $result = $this->db->insert('noticia', $data);
        return $result;
    }

    function editarNoticia($id, $nombre, $descripcion) {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );

        $this->db->where('id', $id);
        $result = $this->db->update('noticia', $data);
        return $result;
    }

    function eliminarNoticia($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('noticia');
        return $result;
    }
}
