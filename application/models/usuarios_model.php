<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getUsuarios(){
        $query = $this->db->get('usuarios');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function getUsuario($id){
        $this->db->where('id', $id);
        $query = $this->db->get('usuarios');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearUsuario($nombre, $usuario, $password){
        
        $data = array(
            'nombre' => $nombre, 
            'usuario' => $usuario, 
            'pass' => $password
        );
        
        $this->db->insert('usuarios', $data);
    }
    
    function editarUsuario($id, $nombre, $usuario, $password){
        $data = array(
            'nombre' => $nombre, 
            'usuario' => $usuario, 
            'pass' => $password
        );
        
        $this->db->where('id', $id);
        $result = $this->db->update('usuarios', $data);
        var_dump($result);
        die;
    }
}
