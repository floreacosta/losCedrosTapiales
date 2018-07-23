<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->library('upload');
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

    public function crearNoticia ($titulo = null, $bajada = null, $cuerpo = null, $imagen = null, $descripcionImagen = null) {
        if ($titulo === null) {
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/crear');
        } else {
            $data['result'] = $this->Noticia_model->crearNoticia($titulo, $bajada, $cuerpo, $imagen, $descripcionImagen);
            $data['noticias'] = $this->Noticia_model->getNoticias();

            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/index', $data);
        }
    }

    public function subirImagen() {
        $titulo_post = $this->input->post('titulo');
        $bajada_post = $this->input->post('bajada');
        $cuerpo_post = $this->input->post('cuerpo');
        $descripcionImagen_post = $this->input->post('descripcionImagen');

        $config['upload_path'] = './img/noticias';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image_file')) {
            $data['error'] = array('error' => $this->upload->display_errors());
            $data['noticias'] = $this->Noticia_model->getNoticias();
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/index', $data);
        } else {
            $imagen_post = $this->upload->data()['file_name'];
            $data = array('upload_data' => $this->upload->data());
            $this->crearNoticia($titulo_post, $bajada_post, $cuerpo_post, $imagen_post, $descripcionImagen_post);
        }
    }

    public function subirImagenEditar () {
        $id_post = $this->input->post('hiddenId');
        $titulo_post = $this->input->post('titulo');
        $bajada_post = $this->input->post('bajada');
        $cuerpo_post = $this->input->post('cuerpo');
        $descripcionImagen_post = $this->input->post('descripcionImagen');

        if ($_FILES['image_file']['tmp_name'] !== '') {
            $config['upload_path'] = './img/noticias';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image_file')) {
                var_dump($this->upload->display_errors());
                die;
                $data['noticias'] = $this->Noticia_model->getNoticias();
                $data['error'] = array('error' => $this->upload->display_errors());
                $this->load->view('admin/includes/head');
                $this->load->view('admin/noticias/index', $data);
            } else {
                $imagen_post = $this->upload->data()['file_name'];
                $data = array('upload_data' => $this->upload->data());
                $this->updateNoticia($id_post, $titulo_post, $bajada_post, $cuerpo_post, $imagen_post, $descripcionImagen_post);
            }
        } else {
            $this->updateNoticia($id_post, $titulo_post, $bajada_post, $cuerpo_post, $imagen_post, $descripcionImagen_post);
        }

    }

    public function editarFormularioNoticia () {
        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['noticia'] = $this->Noticia_model->getNoticia($id);
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/editar', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/noticia', 'Volver');
        }
    }

    public function updateNoticia ($id = null, $titulo = null, $bajada = null, $cuerpo = null, $imagen = null, $descripcionImagen = null) {
        if ($imagen === null) {
            $data['result'] = $this->Noticia_model->editarNoticiaSinImagen($id, $titulo, $bajada, $cuerpo, $descripcionImagen);
        } else {
            $data['result'] = $this->Noticia_model->editarNoticia($id, $titulo, $bajada, $cuerpo, $imagen, $descripcionImagen);
        }

        $data['noticias'] = $this->Noticia_model->getNoticias();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/noticias/index', $data);
    }

    public function eliminarNoticia () {
      if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['result'] = $this->Noticia_model->eliminarNoticia($id);
            $data['noticias'] = $this->Noticia_model->getNoticias();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/noticias/index', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/noticia', 'Volver');
        }
    }
}
