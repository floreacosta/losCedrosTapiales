<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especialidades extends CI_Controller {

    public function __construct(){
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('admin/Especialidad_model');
        $this->check_session();
    }

    public function index(){
        $data['especialidades'] = $this->especialidades_model->getEspecialidades();
        $this->load->view('admin/includes/head');
        $this->load->view('admin/especialidades/index', $data);
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

    public function crearEspecialidad(){
        if(null === ($this->input->post('nombre'))){
            $this->load->view('admin/includes/head');
            $this->load->view('admin/especialidades/crear');
        }else{
            $nombre_post = $this->input->post('nombre');
            $data['result'] = $this->especialidades_model->crearEspecialidad($nombre_post);
            $data['especialidades'] = $this->especialidades_model->getEspecialidades();
            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/especialidades/index', $data);
        }
    }

    public function editarFormularioEspecialidades() {

        if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['especialidad'] = $this->especialidades_model->getEspecialidad($id);
            $this->load->view('admin/includes/head');
            $this->load->view('admin/especialidades/editar', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/especialidades', 'Volver');
        }
    }

    public function updateEspecialidades(){
        $id_post = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');
        $data['result'] = $this->especialidades_model->editarEspecialidad($id_post, $nombre_post);
        $data['especialidades'] = $this->especialidades_model->getEspecialidades();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/especialidades/index', $data);

    }

    public function EliminarEspecialidad() {
      if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['result'] = $this->especialidades_model->eliminarEspecialidad($id);
            $data['especialidades'] = $this->especialidades_model->getEspecialidades();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/especialidades/index', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/especialidades', 'Volver');
        }
    }
}
