<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getServicios() {
        $this->db->select('servicio.id, servicio.nombre, servicio.descripcion, jefe_servicio.id as idJefeServicio, empleado.nombre as nombreJefeServicio');
        $this->db->from('jefe_servicio');
        $this->db->join('empleado', 'jefe_servicio.idEmpleado = empleado.id');
        $this->db->join('servicio', 'jefe_servicio.idServicio = servicio.id');

        $this->db->order_by("nombre", "asc");
        $query = $this->db->get();

        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function getLastIdServicio () {
      $servicios = $this->db->query('SELECT id FROM servicio ORDER BY id DESC LIMIT 1;')->result();
      $cantidad;
      foreach ($servicios as $key => $row) $cantidad = intval($row->id) + 1;
      return $cantidad;
    }

    function getIdServicio ($nombre) {
      $this->db->select('id');
      $this->db->from('servicio');
      $this->db->where('nombre', $nombre);
      $query = $this->db->get();
      $id;

      foreach ($query->result() as $key => $row) $id = intval($row->id);
      return $id;
    }

    function getServicio($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('servicio');
        if ($query->num_rows() > 0) return $query;
        else return false;
    }

    function crearServicio($nombre, $descripcion) {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );

        $result = $this->db->insert('servicio', $data);
        return $result;
    }

    function editarServicio($id, $nombre, $descripcion) {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );

        $this->db->where('id', $id);
        $result = $this->db->update('servicio', $data);
        return $result;
    }

    function eliminarServicio($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('servicio');
        return $result;
    }
}
