<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getCategorias(){
        $this->db->order_by("nombre", "asc");
        $query = $this->db->get('categoria');
        if($query->num_rows() > 0) return $query;
        else return false;
    }

    function getCategoria($id){
        $this->db->where('id', $id);
        $query = $this->db->get('categoria');
        if($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearCategoria($nombre, $descripcion){

        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );

        $result = $this->db->insert('categoria', $data);
        return $result;
    }

    function editarCategoria($id, $nombre, $descripcion){
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );
        $this->db->where('id', $id);
        $result = $this->db->update('categoria', $data);
        return $result;
    }

    function eliminarCategoria($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('categoria');
        return $result;
    }
}
