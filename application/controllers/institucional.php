<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('Institucional_model');
  }

  public function index() {
    $data['autoridades'] = $this->Institucional_model->getAutoridades();
    $this->load->view('includes/head');
    $this->load->view('includes/header');
    $this->load->view('includes/tooltip');
    $this->load->view('institucional/institucional', $data);
    $this->load->view('includes/footer');
	}
}
