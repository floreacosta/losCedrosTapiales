<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model {
    function __construct() {
      parent::__construct();
      $this->load->database();
    }

    // NOTE: get first 4 news
    function getLastNews () {
      $this->db->limit(4);
      $this->db->select('id, titulo, bajada');
      $this->db->from('noticia');
      $noticias = $this->db->get();

      return $noticias;
    }

    // NOTE: get all news
    function getAllNews () {
      $this->db->select('id, titulo, bajada');
      $this->db->from('noticia');
      $noticias = $this->db->get();

      return $noticias;
    }

    function getNewById ($id) {
      $this->db->where('id', $id);
      $noticia = $this->db->get('noticia');

      if($noticia->num_rows() > 0) return $noticia;
      else return false;
    }
}
