<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalacion_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getInstalaciones() {
        $this->db->select("instalacion.id as `Id`, instalacion.nombre as `instalacionNombre`, instalacion.imagen as `instalacionImagen`, instalacion.descripcion as `instalacionDescripcion`, categoria.nombre as `categoriaNombre` ");
        $this->db->join('categoria', 'instalacion.idCategoria = categoria.id', 'left');
        $query = $this->db->get('instalacion');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getInstalacion($id) {
        $this->db->select("instalacion.id as `Id`, instalacion.nombre as `instalacionNombre`, instalacion.imagen as `instalacionImagen`, instalacion.descripcion as `instalacionDescripcion`, categoria.nombre as `categoriaNombre` ");
        $this->db->join('categoria', 'instalacion.idCategoria = categoria.id', 'left');
        $this->db->where('instalacion.Id', $id);
        $query = $this->db->get('instalacion');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearInstalacion($nombre, $imagen, $descripcion, $categoria) {

        $data = array(
            'nombre' => $nombre,
            'imagen' => $imagen,
            'descripcion' => $descripcion,
            'idCategoria' => $categoria
        );

        $result = $this->db->insert('instalacion', $data);
        return $result;
    }

    function editarInstalacion($id, $nombre, $descripcion, $categoria, $imagen) {
        $data = array(
            'nombre' => $nombre,
            'imagen' => $imagen,
            'descripcion' => $descripcion,
            'idCategoria' => $categoria
        );
        $this->db->where('id', $id);
        $result = $this->db->update('instalacion', $data);
        return $result;
    }

    function editarInstalacionSinImagen($id, $nombre, $descripcion, $categoria) {

        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'idCategoria' => $categoria
        );
        $this->db->where('id', $id);
        $result = $this->db->update('instalacion', $data);
        return $result;
    }

    function eliminarInstalacion($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('instalacion');
        return $result;
    }
}
