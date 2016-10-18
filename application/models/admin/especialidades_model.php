<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especialidades_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getEspecialidades(){
        $this->db->order_by("nombre", "asc");
        $query = $this->db->get('especialidades');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function getEspecialidad($id){
        $this->db->where('id', $id);
        $query = $this->db->get('especialidades');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearEspecialidad($nombre){
        
        $data = array(
            'nombre' => $nombre
        );
        
        $result = $this->db->insert('especialidades', $data);
        return $result;
    }
    
    function editarEspecialidad($id, $nombre){
        $data = array(
            'nombre' => $nombre
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('especialidades', $data);
        return $result;
    }
    
    function eliminarEspecialidad($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('especialidades');
        return $result;
    }
}
