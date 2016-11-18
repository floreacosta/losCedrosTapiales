<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getCategorias(){
        $this->db->order_by("nombre", "asc");
        $query = $this->db->get('categorias');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function getCategoria($id){
        $this->db->where('id', $id);
        $query = $this->db->get('categorias');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearCategoria($nombre){
        
        $data = array(
            'nombre' => $nombre
        );
        
        $result = $this->db->insert('categorias', $data);
        return $result;
    }
    
    function editarCategoria($id, $nombre){
        $data = array(
            'nombre' => $nombre
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('categorias', $data);
        return $result;
    }
    
    function eliminarCategoria($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('categorias');
        return $result;
    }
}
