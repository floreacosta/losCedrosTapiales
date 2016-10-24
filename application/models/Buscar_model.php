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
        $query = $this->db->get('especialidades');
        
        if($query->num_rows() > 0){
            $resultados[] = 'especialidades';
        }
        
        $this->db->like('nombre', $busqueda);
        $query = $this->db->get('coberturas');
        
        if($query->num_rows() > 0){
            $resultados[] = 'coberturas';
        }
        
        $this->db->like('nombre', $busqueda);
        $query = $this->db->get('doctores');
        
        if($query->num_rows() > 0){
            $resultados[] = 'doctores';
        }
        
        $this->db->like('nombre', $busqueda);
        $query = $this->db->get('instalaciones');
        
        if($query->num_rows() > 0){
            $resultados[] = 'instalaciones';
        }
        
        $this->db->like('nombre', $busqueda);
        $query = $this->db->get('servicios');
        
        if($query->num_rows() > 0){
            $resultados[] = 'servicios';
        }
        
        return $resultados;
    }
}
