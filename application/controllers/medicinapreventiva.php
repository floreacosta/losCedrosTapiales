<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicinapreventiva extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{   
            $this->load->view('includes/head');
            $this->load->view('includes/header');
            $this->load->view('includes/tooltip');
            $this->load->view('medicinapreventiva/medicinapreventiva');
            $this->load->view('includes/footer');
	}
}
