<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalacion extends CI_Controller {
    public function __construct() {
      // $this->load does not exist until after you call this
      parent::__construct(); // Construct CI's core so that you can use it

      $this->load->helper('url');
      $this->load->database();
      $this->load->model('Instalacion_model');
      $this->load->model('admin/Categoria_model');
    }

  public function index() {
    $data['categorias'] = $this->Categoria_model->getCategorias();
    $data['instalaciones'] = $this->Instalacion_model->getInstalaciones();
    $this->load->view('includes/head');
    $this->load->view('includes/header');
    $this->load->view('includes/tooltip');
    $this->load->view('instalaciones/instalaciones', $data);
    $this->load->view('includes/footer');
	}
}
