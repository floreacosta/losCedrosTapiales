<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coberturamedica extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Cobertura_model');
    }

    public function index()
	{
            $data['coberturas'] = $this->Cobertura_model->getCoberturas();
            $this->load->view('includes/head');
            $this->load->view('includes/header');
            $this->load->view('includes/tooltip');
            $this->load->view('coberturamedica/coberturamedica', $data);
            $this->load->view('includes/footer');
	}
}
