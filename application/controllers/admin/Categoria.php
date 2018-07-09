<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('admin/Categoria_model');
        $this->check_session();
    }

    public function index() {
        $data['categorias'] = $this->Categoria_model->getCategorias();
        $this->load->view('admin/includes/head');
        $this->load->view('admin/categorias/index', $data);
    }

    public function logout() {
        $this->session->unset_userdata('id_usuario');
        $this->session->unset_userdata('ip_address');
        $this->session->sess_destroy();
        redirect(base_url()."admin/login");
    }

    public function check_session() {
        $id_usuario = $this->session->userdata('id_usuario');
        if (!$id_usuario) {
            redirect(base_url()."admin/login");
        }
    }

    public function crearCategorias() {
        if (null === ($this->input->post('nombre'))) {
            $this->load->view('admin/includes/head');
            $this->load->view('admin/categorias/crear');
        } else {
            $nombre_post = $this->input->post('nombre');
            $descripcion_post = $this->input->post('descripcion');
            $data['result'] = $this->Categoria_model->crearCategoria($nombre_post, $descripcion_post);
            $data['categorias'] = $this->Categoria_model->getCategorias();
            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/categorias/index', $data);
        }
    }

    public function editarFormularioCategorias() {

        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['categoria'] = $this->Categoria_model->getCategoria($id);
            $this->load->view('admin/includes/head');
            $this->load->view('admin/categorias/editar', $data);
        } else {
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/categorias', 'Volver');
        }
    }

    public function updateCategorias() {
        $id_post = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');
        $descripcion_post = $this->input->post('descripcion');
        $data['result'] = $this->Categoria_model->editarCategoria($id_post, $nombre_post, $descripcion_post);
        $data['categorias'] = $this->Categoria_model->getCategorias();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/categorias/index', $data);

    }

    public function EliminarCategoria() {
      if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['result'] = $this->Categoria_model->eliminarCategoria($id);
            $data['categorias'] = $this->Categoria_model->getCategorias();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/categorias/index', $data);
        } else {
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/categorias', 'Volver');
        }
    }
}
