<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('buscar_model');
    }

    public function index()
	{   
            $stringBuscado = $this->input->post('search');
            $data['resultadosBusqueda'] = $this->buscar_model->getResultadosBusqueda($stringBuscado);
            $this->load->view('includes/head');
            $this->load->view('includes/header');
            $this->load->view('includes/tooltip');
            $this->load->view('buscar/buscar', $data);
            $this->load->view('includes/footer');
	}
}
