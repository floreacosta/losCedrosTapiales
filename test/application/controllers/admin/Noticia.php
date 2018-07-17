<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('admin/Noticia_model');
        $this->check_session();
    }

    public function index() {
        $data['noticias'] = $this->Noticia_model->getNoticias();
        $this->load->view('admin/includes/head');
        $this->load->view('admin/noticias/index', $data);
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

    public function crearNoticia() {
        if (null === ($this->input->post('nombre'))) {
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/crear');
        } else {
            $nombre_post = $this->input->post('nombre');
            $descripcion_post = $this->input->post('descripcion');
            $data['result'] = $this->Servicio_model->crearServicio($nombre_post, $descripcion_post);
            $data['servicios'] = $this->Servicio_model->getNoticias();
            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/index', $data);
        }
    }

    public function editarFormularioNoticias() {
        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['servicio'] = $this->Servicio_model->getServicio($id);
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/editar', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/noticia', 'Volver');
        }
    }

    public function updateNoticias() {
        $id_post = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');
        $descripcion_post = $this->input->post('descripcion');
        $data['result'] = $this->Servicio_model->editarNoticias($id_post, $nombre_post, $descripcion_post);
        $data['servicios'] = $this->Servicio_model->getNoticias();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/servicios/index', $data);

    }

    public function eliminarNoticia() {
      if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['result'] = $this->Servicio_model->eliminarServicio($id);
            $data['servicios'] = $this->Servicio_model->getNoticias();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/index', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/noticia', 'Volver');
        }
    }
}
