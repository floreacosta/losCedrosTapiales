<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudio extends CI_Controller {

    public function __construct()
    {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it

        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Estudio_model');
    }

    public function index($id = 0) {
        $data['estudios_todos'] = $this->Estudio_model->getEstudios();
        $data['estudios_x_imagenes'] = $this->Estudio_model->getEstudiosImagenes();
        $data['estudios_x_laboratorio'] = $this->Estudio_model->getEstudiosLaboratorio();
        $data['estudios_tipos'] = $this->Estudio_model->getTipoEstudios();
        $this->load->view('includes/head');
        $this->load->view('includes/header');
        $this->load->view('includes/tooltip');
        $this->load->view('estudio/estudios', $data);
        $this->load->view('includes/footer');
    }
}
