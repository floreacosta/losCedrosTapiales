<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especialidad extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('Especialidad_model');
    $this->load->model('admin/Doctorxespecialidad_model');
  }

  public function index() {
    $data['especialidades'] = $this->Especialidad_model->getEspecialidades();
    $data['doctoresConEspecialidad'] = $this->Doctorxespecialidad_model->getdoctoresConEspecialidad();
    $this->load->view('includes/head');
    $this->load->view('includes/header');
    $this->load->view('includes/tooltip');
    $this->load->view('especialidades/especialidades', $data);
    $this->load->view('includes/footer');
	}
}
