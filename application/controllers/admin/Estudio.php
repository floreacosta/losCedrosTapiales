<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudio extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('admin/Estudio_model');
        $this->load->model('admin/EstudioTipo_model');
        $this->check_session();
    }

    public function index() {
        $data['estudios'] = $this->Estudio_model->getEstudios();
        $data['tipos'] = $this->Estudio_model->getTipoEstudios();
        $this->load->view('admin/includes/head');
        $this->load->view('admin/estudios/index', $data);
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

    public function crearEstudio() {
        $data['tipos'] = $this->Estudio_model->getTipoEstudios();
        if (null === ($this->input->post('nombre'))) {
            $this->load->view('admin/includes/head');
            $this->load->view('admin/estudios/crear', $data);
        } else {
            $nombre_post = $this->input->post('nombre');
            $descripcion_post = $this->input->post('descripcion');
            $idTipo_post = $this->input->post('idTipo');
            $data['result'] = $this->Estudio_model->crearEstudio($nombre_post, $descripcion_post, $idTipo_post);
            $data['estudios'] = $this->Estudio_model->getEstudios();
            $data['tipos'] = $this->Estudio_model->getTipoEstudios();
            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/estudios/index', $data);
        }
    }

    public function crearTipoEstudio() {
      if (null === ($this->input->post('nombre'))) {
          $this->load->view('admin/includes/head');
          $this->load->view('admin/estudios/crearTipo');
      } else {
          $nombre_post = $this->input->post('nombre');
          $descripcion_post = $this->input->post('descripcion');
          $data['result'] = $this->Estudio_model->crearTipoEstudio($nombre_post, $descripcion_post);
          $data['estudios'] = $this->Estudio_model->getEstudios();
          $data['tipos'] = $this->Estudio_model->getTipoEstudios();
          $data['tipo'] = 'crear';
          $this->load->view('admin/includes/head');
          $this->load->view('admin/estudios/index', $data);
      }
    }

    public function editarFormularioEstudio() {
        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['estudio'] = $this->Estudio_model->getEstudio($id);
            $data['tipos'] = $this->Estudio_model->getTipoEstudios();
            $data['tipo'] = $this->Estudio_model->getTipoEstudio($data['estudio']->result()[0]->idTipo);
            $this->load->view('admin/includes/head');
            $this->load->view('admin/estudios/editar', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/estudio', 'Volver');
        }
    }

    public function editarFormularioTipoEstudio () {
      if ($this->input->get('id') !== null) {
          $id = $this->input->get('id');
          $data['tipo'] = $this->Estudio_model->getTipoEstudio($id);
          $this->load->view('admin/includes/head');
          $this->load->view('admin/estudios/editarTipo', $data);
      } else {
          echo "Ha ocurrido un error, inténtelo de nuevo por favor";
          echo anchor(base_url().'admin/estudio', 'Volver');
      }
    }

    public function updateEstudio() {
        $id_post = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');
        $descripcion_post = $this->input->post('descripcion');
        $idTipo_post = $this->input->post('idTipo');
        $data['result'] = $this->Estudio_model->editarEstudio($id_post, $nombre_post, $descripcion_post, $idTipo_post);
        $data['estudios'] = $this->Estudio_model->getEstudios();
        $data['tipos'] = $this->Estudio_model->getTipoEstudios();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/estudios/index', $data);
    }

    function updateTipoEstudio () {
      $id_post = $this->input->post('hiddenId');
      $nombre_post = $this->input->post('nombre');
      $descripcion_post = $this->input->post('descripcion');
      $data['result'] = $this->Estudio_model->editarTipoEstudio($id_post, $nombre_post, $descripcion_post);
      $data['estudios'] = $this->Estudio_model->getEstudios();
      $data['tipos'] = $this->Estudio_model->getTipoEstudios();
      $data['tipo'] = 'editar';
      $this->load->view('admin/includes/head');
      $this->load->view('admin/estudios/index', $data);
    }

    public function eliminarEstudio() {
      if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['result'] = $this->Estudio_model->eliminarEstudio($id);
            $data['estudios'] = $this->Estudio_model->getEstudios();
            $data['tipos'] = $this->Estudio_model->getTipoEstudios();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/estudios/index', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/estudio', 'Volver');
        }
    }

    public function eliminarTipoEstudio() {
      if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['result'] = $this->Estudio_model->eliminarTipoEstudio($id);
            $data['estudios'] = $this->Estudio_model->getEstudios();
            $data['tipos'] = $this->Estudio_model->getTipoEstudios();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/estudios/index', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/estudio', 'Volver');
        }
    }
}
