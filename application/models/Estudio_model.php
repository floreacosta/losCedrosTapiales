<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudio_model extends CI_Model {
    function __construct() {
      parent::__construct();
      $this->load->database();
    }

    function getTipoEstudios() {
      $this->db->select('tipoXestudio.id, tipoXestudio.nombre, tipoXestudio.descripcion');
      $this->db->from('tipoXestudio');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }

    function getEstudios () {
      $this->db->select('estudio.id, estudio.nombre, estudio.descripcion, tipoXestudio.id as idTipo, tipoXestudio.nombre as nombreTipo');
      $this->db->from('estudio');
      $this->db->join('tipoXestudio', 'estudio.idTipo = tipoXestudio.id');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }

    function getEstudiosImagenes() {
      $this->db->select('estudio.id, estudio.nombre, estudio.descripcion, tipoXestudio.nombre');
      $this->db->from('estudio');
      $this->db->join('tipoXestudio', 'tipoXestudio.id = estudio.idTipo');
      $this->db->where('estudio.idTipo = 1');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }

    function getEstudiosLaboratorio() {
      $this->db->select('estudio.id, estudio.nombre, estudio.descripcion, tipoXestudio.nombre');
      $this->db->from('estudio');
      $this->db->join('tipoXestudio', 'tipoXestudio.id = estudio.idTipo');
      $this->db->where('estudio.idTipo = 2');
      $query = $this->db->get();

      if($query->num_rows() > 0) return $query;
      else return false;
    }
}
