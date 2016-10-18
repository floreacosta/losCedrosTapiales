<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctorxespecialidad_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
        
    function getEspecialidadesXDoctor($id){
        $this->db->where('idDoctor', $id);
        $query = $this->db->get('doctorxespecialidad');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearDoctorxespecialidad($idDoctor, $idEspecialidad){
        
        $data = array(
            'idEspecialidad' => $idEspecialidad,
            'idDoctor' => $idDoctor    
        );
        
        $result = $this->db->insert('doctorxespecialidad', $data);
        return $result;
    }
    
    function editarDoctorxespecialidad($id, $idDoctor, $idEspecialidad){
        $data = array(
            'idEspecialidad' => $idEspecialidad,
            '$dDoctor' => $idDoctor 
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('doctorxespecialidad', $data);
        return $result;
    }
    
    function eliminarDoctorxespecialidad($idDoctor){
        $this->db->where('idDoctor', $idDoctor);
        $result = $this->db->delete('doctorxespecialidad');
        return $result;
    }
    
    function getdoctoresConEspecialidad(){
        $this->db->join('doctores', 'doctores.id = doctorxespecialidad.idDoctor', 'left');
        $query = $this->db->get('doctorxespecialidad');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
}
