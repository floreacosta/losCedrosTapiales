<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coberturas_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getCoberturas(){
        $this->db->order_by('nombre', 'asc');
        $query = $this->db->get('coberturas');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function getCobertura($id){
        $this->db->where('id', $id);
        $query = $this->db->get('coberturas');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearCobertura($nombre, $imagen){
        
        $data = array(
            'nombre' => $nombre, 
            'imagen' => $imagen
        );
        
        $result = $this->db->insert('coberturas', $data);
        return $result;
    }
    
    function editarCobertura($id, $nombre, $imagen){
        $data = array(
            'nombre' => $nombre,
            'imagen' => $imagen
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('coberturas', $data);
        return $result;
    }
    
    function editarCoberturaSinImagen($id, $nombre){
        $data = array(
            'nombre' => $nombre
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('coberturas', $data);
        return $result;
    }
    
    function eliminarCobertura($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('coberturas');
        return $result;
    }
}
