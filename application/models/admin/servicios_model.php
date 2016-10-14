<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getServicios(){
        $query = $this->db->get('servicios');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function getServicio($id){
        $this->db->where('id', $id);
        $query = $this->db->get('servicios');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearServicio($nombre, $descripcion){
        
        $data = array(
            'nombre' => $nombre, 
            'descripcion' => $descripcion
        );
        
        $this->db->insert('servicios', $data);
    }
    
    function editarServicio($id, $nombre, $descripcion){
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('servicios', $data);
    }
    
    function eliminarServicio($id){
        $this->db->where('id', $id);
        $this->db->delete('servicios');
    }
}
