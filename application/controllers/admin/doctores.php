<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctores extends CI_Controller {
    
    public function __construct(){
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it        
        $this->load->helper('url'); 
        $this->load->database();
        $this->load->model('admin/doctores_model');
        $this->check_session();
    }
    
    public function index(){
        $data['doctores'] = $this->doctores_model->getDoctores();
        echo anchor(base_url().'/admin/index/logout','Cerrar sesión');
        echo '</br>';
        echo anchor(base_url().'admin/index','Volver al menú principal');
        echo '</br>';
        echo anchor(base_url().'admin/doctores/crearDoctor','Crear nueva doctor');
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
            $this->load->view('admin/doctores/crear');
        }else{
            var_dump($this->input->post());
            die;
            $nombre_post = $this->input->post('nombre');
            $data['result'] = $this->doctores_model->crearDoctor($nombre_post);        
            $data['doctores'] = $this->doctores_model->getDoctores();
            $this->load->view('admin/doctores/index', $data);        
        }
    }
    
    public function editarFormularioDoctores() {
        
        if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['doctor'] = $this->doctores_model->getDoctor($id);
            $this->load->view('admin/doctores/editar', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/doctores', 'Volver');
        }        
    }

    public function updateDoctores(){
        $id_post = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');      
        $data['result'] = $this->doctores_model->editarDoctor($id_post, $nombre_post);        
        $data['doctores'] = $this->doctores_model->getDoctores();
        $this->load->view('admin/doctores/index', $data);
        
    }
    
    public function EliminarDoctor() {
      if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $this->doctores_model->eliminarDoctor($id);
            redirect(base_url()."admin/doctores");
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/doctores', 'Volver');
        }        
    }
}
