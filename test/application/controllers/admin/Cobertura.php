<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coberturas extends CI_Controller {

    public function __construct(){
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->database();
        $this->load->model('admin/Cobertura_model');
        $this->check_session();
    }

    public function index(){
        $data['coberturas'] = $this->coberturas_model->getCoberturas();
        $this->load->view('admin/includes/head');
        $this->load->view('admin/coberturas/index', $data);
    }

    public function logout(){
        $this->session->unset_userdata('id_usuario');
        $this->session->unset_userdata('ip_address');
        $this->session->sess_destroy();
        redirect(base_url()."admin/login");
    }

    public function check_session(){
        $id_usuario = $this->session->userdata('id_usuario');
        if(!$id_usuario){
            redirect(base_url()."admin/login");
        }
    }

    public function crearCobertura($nombre = null, $imagen = null){
        if(null === $nombre){
            $this->load->view('admin/includes/head');
            $this->load->view('admin/coberturas/crear');
        }else{
            $data['result'] = $this->coberturas_model->crearCobertura($nombre, $imagen);
            $data['coberturas'] = $this->coberturas_model->getCoberturas();
            $data['error'] = array('error' => ' ' );
            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/coberturas/index', $data);
        }
    }

    public function subirImagen()
    {
        $nombre_post = $this->input->post('nombre');

        $config['upload_path']          = './img/obras-sociales';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 609;
        $config['max_height']           = 216;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('user_file')){
            $data['error'] = array('error' => $this->upload->display_errors());
            $this->load->view('admin/includes/head');
            $this->load->view('admin/coberturas/index', $data);
        }
        else{
            $imagen_post = $this->upload->data()['file_name'];
            $data = array('upload_data' => $this->upload->data());
            $this->crearCobertura($nombre_post, $imagen_post);
        }
    }

    public function subirImagenEditar()
    {
        $id_post = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');
        if('' !== $_FILES['user_file']['tmp_name']) {
            $config['upload_path']          = './img/obras-sociales';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 609;
            $config['max_height']           = 216;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('user_file')){
                $data['error'] = array('error' => $this->upload->display_errors());
                $this->load->view('admin/includes/head');
                $this->load->view('admin/coberturas/index', $data);
            }
            else{
                $imagen_post = $this->upload->data()['file_name'];
                $data = array('upload_data' => $this->upload->data());
                $this->updateCoberturas($id_post, $nombre_post, $imagen_post);
            }
        }else{
            $this->updateCoberturas($id_post, $nombre_post);
        }
    }

    public function editarFormularioCoberturas() {

        if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['cobertura'] = $this->coberturas_model->getCobertura($id);
            $this->load->view('admin/includes/headNIm');
            $this->load->view('admin/coberturas/editar', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/coberturas', 'Volver');
        }
    }

    public function updateCoberturas($id = null, $nombre = null, $imagen = null){
        if($imagen === null){
            $data['result'] = $this->coberturas_model->editarCoberturaSinImagen($id, $nombre, $imagen);
        }else{
            $data['result'] = $this->coberturas_model->editarCobertura($id, $nombre, $imagen);
        }

        $data['coberturas'] = $this->coberturas_model->getCoberturas();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/coberturas/index', $data);
    }

    public function EliminarCobertura() {
      if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['result'] = $this->coberturas_model->eliminarCobertura($id);
            $data['coberturas'] = $this->coberturas_model->getCoberturas();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/coberturas/index', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/coberturas', 'Volver');
        }
    }
}
