<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalacion_model extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->load->database();
  }

  function getInstalaciones() {
    $query = $this->db->get('instalacion');
    if($query->num_rows() > 0) return $query;
    else return false;
  }
}
