<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {
    
    public function __construct()
    {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('servicios_model');
    }
    
    public function index()
    {   

        $data['servicios'] = $this->servicios_model->getServices();
        $this->load->view('includes/head');
        $this->load->view('includes/header');
        $this->load->view('includes/tooltip');
        $this->load->view('servicios/servicios', $data);
        $this->load->view('includes/footer');
    }
    
}
