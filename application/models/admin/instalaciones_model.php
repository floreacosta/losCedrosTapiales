<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalaciones_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    function getInstalaciones(){
        $this->db->select("instalaciones.id as `Id`, instalaciones.nombre as `instalacionNombre`, instalaciones.imagen as `instalacionImagen`, instalaciones.descripcion as `instalacionDescripcion`, categorias.nombre as `categoriaNombre` ");
        $this->db->join('categorias', 'instalaciones.idCategoria = categorias.id', 'left');
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
    
    function crearInstalacion($nombre, $imagen, $descripcion, $categoria){
        
        $data = array(
            'nombre' => $nombre, 
            'imagen' => $imagen,
            'descripcion' => $descripcion,
            'idCategoria' => $categoria
        );
        
        $result = $this->db->insert('instalaciones', $data);
        return $result;
    }
    
    function editarInstalacion($id, $nombre, $imagen, $descripcion, $categoria){
        $data = array(
            'nombre' => $nombre,
            'imagen' => $imagen,
            'descripcion' => $descripcion,
            'idCategoria' => $categoria
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('instalaciones', $data);
        return $result;
    }
    
    function editarInstalacionSinImagen($id, $nombre, $descripcion, $categoria){
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'categoria' => $categoria
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
