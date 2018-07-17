<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it

        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Noticia_model');
    }

    public function index($id = 0) {
        $data['noticias_todas'] = $this->Noticia_model->getAllNews();
        $data['noticia_by_id'] = $this->Noticia_model->getNewById($id);
        $this->load->view('includes/head');
        $this->load->view('includes/header');
        $this->load->view('includes/tooltip');
        $this->load->view('noticias/noticias', $data);
        $this->load->view('includes/footer');
    }
}
