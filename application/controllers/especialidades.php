<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especialidades extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('especialidades_model');
    }

    public function index()
	{   
            $data['especialidades'] = $this->especialidades_model->getEspecialidades();
            $this->load->view('includes/head');
            $this->load->view('includes/header');
            $this->load->view('includes/tooltip');
            $this->load->view('especialidades/especialidades', $data);
            $this->load->view('includes/footer');
	}
}
