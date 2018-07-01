<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getResultadosBusqueda($busqueda)
    {
        $resultados = array();
        $this->db->like('nombre', $busqueda);
        $query = $this->db->get('especialidad');

        if($query->num_rows() > 0){
            $resultados[] = 'especialidad';
        }

        $this->db->like('nombre', $busqueda);
        $query = $this->db->get('cobertura');

        if($query->num_rows() > 0){
            $resultados[] = 'cobertura';
        }

        $this->db->like('nombre', $busqueda);
        $query = $this->db->get('instalacion');

        if($query->num_rows() > 0){
            $resultados[] = 'instalacion';
        }

        $this->db->like('nombre', $busqueda);
        $query = $this->db->get('servicio');

        if($query->num_rows() > 0){
            $resultados[] = 'servicio';
        }

        return $resultados;
    }
}
