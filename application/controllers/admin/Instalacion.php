<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalacion extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->database();
        $this->load->model('admin/Instalacion_model');
        $this->load->model('admin/Categoria_model');
        $this->check_session();
    }

    public function index() {
        $data['instalaciones'] = $this->Instalacion_model->getInstalaciones();
        $this->load->view('admin/includes/head');
        $this->load->view('admin/instalaciones/index', $data);
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

    public function crearInstalacion($nombre = null, $imagen = null, $descripcion = null, $categoria = null) {
        if (null === $nombre) {
            $data['categorias'] = $this->Categoria_model->getCategorias();
            $this->load->view('admin/includes/head');
            $this->load->view('admin/instalaciones/crear', $data);
        } else {
            $data['result'] = $this->Instalacion_model->crearInstalacion($nombre, $imagen, $descripcion, $categoria);
            $data['instalaciones'] = $this->Instalacion_model->getInstalaciones();
            $data['tipo'] = 'crear';
            $data['error'] = array('error' => ' ' );
            $this->load->view('admin/includes/head');
            $this->load->view('admin/instalaciones/index', $data);
        }
    }

    public function subirImagen() {
        $nombre_post = $this->input->post('nombre');
        $descripcion_post = $this->input->post('descripcion');
        $categoria_post = $this->input->post('categoria');

        $config['upload_path'] = './img/slider';
        $config['allowed_types'] = 'jpg|gif|png|jpeg|JPG|PNG';
        $config['max_size'] = 100000;
        $config['max_width'] = 100000;
        $config['max_height'] = 100000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('user_file')) {
            $data['error'] = array('error' => $this->upload->display_errors());
            $data['instalaciones'] = $this->Instalacion_model->getInstalaciones();
            $this->load->view('admin/includes/head');
            $this->load->view('admin/instalaciones/index', $data);
        } else {
            $imagen_post = $this->upload->data()['file_name'];
            $data = array('upload_data' => $this->upload->data());
            $this->crearInstalacion($nombre_post, $imagen_post, $descripcion_post, $categoria_post);
        }
    }

    public function subirImagenEditar() {
        $id_post = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');
        $descripcion_post = $this->input->post('descripcion');
        $categoria_post = $this->input->post('categoria');

        if ('' !== $_FILES['user_file']['tmp_name']) {
            $config['upload_path'] = './img/slider';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10000;
            $config['max_width'] = 10000;
            $config['max_height'] = 10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('user_file')) {
                var_dump($this->upload->display_errors());
                die;
                $data['error'] = array('error' => $this->upload->display_errors());
                $data['instalaciones'] = $this->Instalacion_model->getInstalaciones();
                $this->load->view('admin/includes/head');
                $this->load->view('admin/instalaciones/index', $data);
            } else {
                $imagen_post = $this->upload->data()['file_name'];
                $data = array('upload_data' => $this->upload->data());
                $this->updateInstalaciones($id_post, $nombre_post, $descripcion_post, $categoria_post, $imagen_post);
            }
        } else {
            $this->updateInstalaciones($id_post, $nombre_post, $descripcion_post, $categoria_post);
        }

    }

    public function editarFormularioInstalaciones() {
        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['instalacion'] = $this->Instalacion_model->getInstalacion($id);
            $data['categorias'] = $this->Categoria_model->getCategorias();
            $this->load->view('admin/includes/headNIm');
            $this->load->view('admin/instalaciones/editar', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/instalaciones', 'Volver');
        }
    }

    public function updateInstalaciones($id = null, $nombre = null, $descripcion = null, $categoria = null, $imagen = null) {

        if ($imagen === NULL) {
            $data['result'] = $this->Instalacion_model->editarInstalacionSinImagen($id, $nombre, $descripcion, $categoria);
        } else {
            $data['result'] = $this->Instalacion_model->editarInstalacion($id, $nombre, $descripcion, $categoria, $imagen);
        }
        $data['instalaciones'] = $this->Instalacion_model->getInstalaciones();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/instalaciones/index', $data);
    }

    public function EliminarInstalacion() {
        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['result'] = $this->Instalacion_model->eliminarInstalacion($id);
            $data['instalaciones'] = $this->Instalacion_model->getInstalaciones();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/instalaciones/index', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/instalaciones', 'Volver');
        }
    }
}
