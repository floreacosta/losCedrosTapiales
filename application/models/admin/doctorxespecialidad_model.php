<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctorxespecialidad_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
        
    function getEspecialidadesXDoctor($id){
        $this->db->where('idDoctor', $id);
        $query = $this->db->get('doctorXEspecialidad');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function crearDoctorxespecialidad($idDoctor, $idEspecialidad){
        
        $data = array(
            'idEspecialidad' => $idEspecialidad,
            'idDoctor' => $idDoctor    
        );
        
        $result = $this->db->insert('doctorXEspecialidad', $data);
        return $result;
    }
    
    function editarDoctorxespecialidad($id, $idDoctor, $idEspecialidad){
        $data = array(
            'idEspecialidad' => $idEspecialidad,
            '$dDoctor' => $idDoctor 
        );        
        $this->db->where('id', $id);
        $result = $this->db->update('doctorXEspecialidad', $data);
        return $result;
    }
    
    function eliminarDoctorxespecialidad($idDoctor){
        $this->db->where('idDoctor', $idDoctor);
        $result = $this->db->delete('doctorXEspecialidad');
        return $result;
    }
    
    function getdoctoresConEspecialidad(){
        $this->db->join('doctores', 'doctores.id = doctorXEspecialidad.idDoctor', 'left');
        $query = $this->db->get('doctorXEspecialidad');
        if($query->num_rows() > 0) return $query;
        else return false;
    }
    
    function getDoctoresConEspecialidadesAgrupadas(){
        $this->db->select("doctores.id as `Id`, doctores.nombre as `doctorNombre`, GROUP_CONCAT(especialidades.nombre ORDER BY especialidades.nombre ASC SEPARATOR ', ') as `especialidades`, doctores.esMedicoCabecera as `doctorEsCabecera`");
        $this->db->from("doctorXEspecialidad, doctores, especialidades");
        $this->db->where("doctores.id = doctorXEspecialidad.idDoctor");
        $this->db->where("especialidades.id = doctorxespecialidad.idEspecialidad");
        $this->db->group_by(array("Id", "doctorNombre"));
        $this->db->order_by("doctorNombre");
        $query = $this->db->get();
        if($query->num_rows() > 0) return $query;
        else return false;
    }
}
