<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalaciones_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getInstalaciones(){
        $query = $this->db->get('instalaciones');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function getInstalacion($id){
        $this->db->where('id', $id);
        $query = $this->db->get('instalaciones');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearInstalacion($nombre, $imagen, $descripcion){
        
        $data = array(
            'nombre' => $nombre, 
            'imagen' => $imagen,
            'descripcion' => $descripcion
        );
        
        $this->db->insert('instalaciones', $data);
    }
    
    function editarInstalacion($id, $nombre, $imagen, $descripcion){
        $data = array(
            'nombre' => $nombre,
            'imagen' => $imagen,
            'descripcion' => $descripcion
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('instalaciones', $data);
    }
    
    function eliminarInstalacion($id){
        $this->db->where('id', $id);
        $this->db->delete('instalaciones');
    }
}
