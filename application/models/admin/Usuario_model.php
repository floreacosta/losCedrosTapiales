<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getUsuarios(){
        $query = $this->db->get('usuario');
        if($query->num_rows() > 0) return $query;
        else return false;
    }

    function getUsuario($id){
        $this->db->where('id', $id);
        $query = $this->db->get('usuario');
        if($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearUsuario($nombre, $usuario, $password){

        $data = array(
            'nombre' => $nombre,
            'usuario' => $usuario,
            'pass' => $password
        );

        $result = $this->db->insert('usuario', $data);
        return $result;
    }

    function editarUsuario($id, $nombre, $usuario, $password){
        $data = array(
            'nombre' => $nombre,
            'usuario' => $usuario,
            'pass' => $password
        );
        $this->db->where('id', $id);
        $result = $this->db->update('usuario', $data);
        return $result;
    }

    function eliminarUsuario($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('usuario');
        return $result;
    }
}
