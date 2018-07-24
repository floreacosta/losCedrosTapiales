<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudio_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getEstudios() {
      $this->db->select('estudio.id, estudio.nombre, estudio.descripcion, tipoXestudio.id as idTipo, tipoXestudio.nombre as nombreTipo');
      $this->db->from('estudio');
      $this->db->join('tipoXestudio', 'estudio.idTipo = tipoXestudio.id');
      $this->db->order_by("nombre", "asc");
      $query = $this->db->get();
      if ($query->num_rows() > 0) return $query;
      else return false;
    }

    function getEstudio($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('estudio');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearEstudio($nombre, $descripcion, $idTipo) {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'idTipo' => $idTipo
        );

        $result = $this->db->insert('estudio', $data);
        return $result;
    }

    function editarEstudio($id, $nombre, $descripcion, $idTipo) {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'idTipo' => $idTipo
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

    function getTipoEstudios () {
      $this->db->order_by("nombre", "asc");
      $query = $this->db->get('tipoXestudio');
      if ($query->num_rows() > 0) return $query->result_array();
      else return false;
    }

    function getTipoEstudio ($id) {
      $this->db->where('id', $id);
      $query = $this->db->get('tipoXestudio');
      if ($query->num_rows() > 0) return $query;
      else return false;
    }

    function crearTipoEstudio ($nombre, $descripcion) {
      $data = array(
          'nombre' => $nombre,
          'descripcion' => $descripcion
      );

      $result = $this->db->insert('tipoXestudio', $data);
      return $result;
    }

    function editarTipoEstudio ($id, $nombre, $descripcion) {
      $data = array(
          'nombre' => $nombre,
          'descripcion' => $descripcion
      );
      $this->db->where('id', $id);
      $result = $this->db->update('tipoXestudio', $data);
      return $result;
    }

    function eliminarTipoEstudio ($id) {
      $this->db->where('id', $id);
      $result = $this->db->delete('tipoXestudio');
      return $result;
    }
}
