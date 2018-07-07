<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model {
    function __construct() {
      parent::__construct();
      $this->load->database();
    }

    function getLastNews () {
      // $this->db->select('estudio.id, estudio.nombre, estudio.descripcion, tipoXestudio.id as idTipo, tipoXestudio.nombre as nombreTipo');
      // $this->db->from('estudio');
      // $this->db->join('tipoXestudio', 'estudio.idTipo = tipoXestudio.id');
      // $query = $this->db->get();

      // if($query->num_rows() > 0) return $query;
      // else return false;
    }

    function getAllNews () {
      // $this->db->select('estudio.id, estudio.nombre, estudio.descripcion, tipoXestudio.id as idTipo, tipoXestudio.nombre as nombreTipo');
      // $this->db->from('estudio');
      // $this->db->join('tipoXestudio', 'estudio.idTipo = tipoXestudio.id');
      // $query = $this->db->get();

      // if($query->num_rows() > 0) return $query;
      // else return false;
    }

    function getNewById ($id) {
      // $this->db->select('estudio.id, estudio.nombre, estudio.descripcion, tipoXestudio.id as idTipo, tipoXestudio.nombre as nombreTipo');
      // $this->db->from('estudio');
      // $this->db->join('tipoXestudio', 'estudio.idTipo = tipoXestudio.id');
      // $query = $this->db->get();

      // if($query->num_rows() > 0) return $query;
      // else return false;
    }
}
