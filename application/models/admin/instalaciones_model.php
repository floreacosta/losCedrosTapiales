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
        
        $result = $this->db->insert('instalaciones', $data);
        return $result;
    }
    
    function editarInstalacion($id, $nombre, $imagen, $descripcion){
        $data = array(
            'nombre' => $nombre,
            'imagen' => $imagen,
            'descripcion' => $descripcion
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('instalaciones', $data);
        return $result;
    }
    
    function editarInstalacionSinImagen($id, $nombre, $descripcion){
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('instalaciones', $data);
        return $result;
    }
    
    function eliminarInstalacion($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('instalaciones');
        return $result;
    }
}
