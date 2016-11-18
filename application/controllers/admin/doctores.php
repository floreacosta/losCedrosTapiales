<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctores extends CI_Controller {
    
    public function __construct(){
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it        
        $this->load->helper('url'); 
        $this->load->database();
        $this->load->model('admin/doctores_model');
        $this->load->model('admin/especialidades_model');
        $this->load->model('admin/doctorxespecialidad_model');
        $this->check_session();
    }
    
    public function index(){
        $data['doctores'] = $this->doctorxespecialidad_model->getDoctoresConEspecialidadesAgrupadas();
        
        $this->load->view('admin/includes/headWoValidation');
        $this->load->view('admin/doctores/index', $data);
    }
    
    public function logout(){
        $this->session->unset_userdata('id_usuario');
        $this->session->unset_userdata('ip_address');
        $this->session->sess_destroy();
        redirect(base_url()."admin/login");
    }
    
    public function check_session(){
        $id_usuario = $this->session->userdata('id_usuario');
        if(!$id_usuario){
            redirect(base_url()."admin/login");
        }        
    }
    
    public function crearDoctor(){
        if(null === ($this->input->post('nombre'))){
            $data['especialidades'] = $this->especialidades_model->getEspecialidades();
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/doctores/crear', $data);
        }else{
            $especialidades_post = explode(".", $this->input->post('especialidades'));
            array_pop($especialidades_post);            
            
            $nombre_post = $this->input->post('nombre');
            $esMedicoCabecera_post = $this->input->post('esMedicoCabecera');
            $idDoctor = $this->doctores_model->crearDoctor($nombre_post, $esMedicoCabecera_post);        
            
            foreach($especialidades_post as $especialidad){
                $data['result'] = $this->doctorxespecialidad_model->crearDoctorxespecialidad($idDoctor, $especialidad);
            }            
            $data['doctores'] = $this->doctores_model->getDoctores();
            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/doctores/index', $data);
        }
    }
    
    public function editarFormularioDoctores() {
        
        if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['doctor'] = $this->doctores_model->getDoctor($id);
            $data['especialidadesXDoctor'] = $this->doctorxespecialidad_model->getEspecialidadesXDoctor($id);
            $data['especialidades'] = $this->especialidades_model->getEspecialidades();
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/doctores/editar', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/doctores', 'Volver');
        }        
    }

    public function updateDoctores(){
        $especialidades_post = explode(".", $this->input->post('especialidades'));
        array_pop($especialidades_post);            

        $nombre_post = $this->input->post('nombre');
        $esMedicoCabecera_post = $this->input->post('esMedicoCabecera');
        $idDoctor = $this->input->post('hiddenId');
        $this->doctorxespecialidad_model->eliminarDoctorxespecialidad($idDoctor);

        $data['result'] = $this->doctores_model->editarDoctor($idDoctor, $nombre_post, $esMedicoCabecera_post);
        foreach($especialidades_post as $especialidad){
            $this->doctorxespecialidad_model->crearDoctorxespecialidad($idDoctor, $especialidad);
        }
        
        $data['tipo'] = 'editar';
        $data['doctores'] = $this->doctores_model->getDoctores();
        $this->load->view('admin/includes/headWoValidation');
        $this->load->view('admin/doctores/index', $data);
    }
    
    public function EliminarDoctor(){
        if($this->input->get('id') !== null){
            $idDoctor = $this->input->get('id');
            $this->doctores_model->eliminarDoctor($idDoctor);
            $data['result'] = $this->doctorxespecialidad_model->eliminarDoctorxespecialidad($idDoctor);
            $data['tipo'] = 'eliminar';
            $data['doctores'] = $this->doctores_model->getDoctores();
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/doctores/index', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/doctores', 'Volver');
        }        
    }
}
