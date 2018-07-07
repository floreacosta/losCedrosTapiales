<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('Noticia_model');
  }

  public function index() {
    $noticias['last_news_list'] = $this->Noticia_model->getLastNews();
    $this->load->view('includes/head');
    $this->load->view('includes/header');
    $this->load->view('includes/tooltip');
    $this->load->view('index/index', $noticias);
    $this->load->view('includes/footer');
	}
}
