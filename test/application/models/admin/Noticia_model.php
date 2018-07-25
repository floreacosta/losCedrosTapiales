<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getNoticias() {
        $query = $this->db->get('noticia');
        $this->db->order_by("nombre", "asc");
        return $query;
    }

    function getNoticia($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('noticia');
        return $query;
    }

    function crearNoticia($titulo, $bajada, $cuerpo, $imagen, $descripcionImagen) {
        $data = array(
            'titulo' => $titulo,
            'bajada' => $bajada,
            'cuerpo' => $cuerpo,
            'imagen' => $imagen,
            'descripcionImagen' => $descripcionImagen
        );

        $result = $this->db->insert('noticia', $data);
        return $result;
    }

    function editarNoticia($id, $titulo, $bajada, $cuerpo, $imagen, $descripcionImagen) {
        $data = array(
          'titulo' => $titulo,
          'bajada' => $bajada,
          'cuerpo' => $cuerpo,
          'imagen' => $imagen,
          'descripcionImagen' => $descripcionImagen
        );

        $this->db->where('id', $id);
        $result = $this->db->update('noticia', $data);
        return $result;
    }

    function editarNoticiaSinImagen($id, $titulo, $bajada, $cuerpo) {
        $data = array(
          'titulo' => $titulo,
          'bajada' => $bajada,
          'cuerpo' => $cuerpo
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
