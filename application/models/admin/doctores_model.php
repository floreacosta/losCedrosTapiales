<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctores_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getDoctores(){
        $query = $this->db->get('doctores');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function getDoctor($id){
        $this->db->where('id', $id);
        $query = $this->db->get('doctores');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearDoctor($nombre){
        
        $data = array(
            'nombre' => $nombre
        );
        
        $this->db->insert('doctores', $data);
    }
    
    function editarDoctor($id, $nombre){
        $data = array(
            'nombre' => $nombre
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('doctores', $data);
    }
    
    function eliminarDoctor($id){
        $this->db->where('id', $id);
        $this->db->delete('doctores');
    }
}
