<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instalaciones extends CI_Controller {
    
    public function __construct(){
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it        
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->database();
        $this->load->model('admin/instalaciones_model');
        $this->check_session();
    }
    
    public function index(){
        $data['instalaciones'] = $this->instalaciones_model->getInstalaciones();
        $this->load->view('admin/includes/head');
        $this->load->view('admin/instalaciones/index', $data);
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
    
    public function crearInstalacion($nombre = null, $imagen = null, $descripcion = null){
        if(null === $nombre){
            $this->load->view('admin/includes/head');
            $this->load->view('admin/instalaciones/crear');
        }else{
            $data['result'] = $this->instalaciones_model->crearInstalacion($nombre, $imagen, $descripcion);        
            $data['instalaciones'] = $this->instalaciones_model->getInstalaciones();
            $data['tipo'] = 'crear';
            $data['error'] = array('error' => ' ' );
            $this->load->view('admin/includes/head');
            $this->load->view('admin/instalaciones/index', $data);
        }
    }
    
    public function subirImagen()
    {
        $nombre_post = $this->input->post('nombre');
        $descripcion_post = $this->input->post('descripcion');
        
        $config['upload_path']          = './img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2000;
        $config['max_height']           = 2000;
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);        
        
        if ( ! $this->upload->do_upload('user_file')){
            $data['error'] = array('error' => $this->upload->display_errors());
            $this->load->view('admin/includes/head');
            $this->load->view('admin/instalaciones/index', $data);
        }
        else{
            $imagen_post = $this->upload->data()['file_name'];
            $data = array('upload_data' => $this->upload->data());
            $this->crearInstalacion($nombre_post, $imagen_post, $descripcion_post);
        }
    }
    
    public function subirImagenEditar()
    {
        $id_post = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');        
        $descripcion_post = $this->input->post('descripcion');
        if(isset($_FILES['image']['tmp_name'])) {
            $config['upload_path']          = './img';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $config['max_width']            = 2000;
            $config['max_height']           = 2000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);        

            if ( ! $this->upload->do_upload('user_file')){
                $data['error'] = array('error' => $this->upload->display_errors());
                $this->load->view('admin/includes/head');
                $this->load->view('admin/instalaciones/index', $data);
            }
            else{
                $imagen_post = $this->upload->data()['file_name'];
                $data = array('upload_data' => $this->upload->data());
                $this->updateInstalaciones($id_post, $nombre_post, $imagen_post, $descripcion_post);
            }
        }else{
            $this->updateInstalaciones($id_post, $nombre_post, $descripcion_post);
        }
        
    }
    
    public function editarFormularioInstalaciones() {
        
        if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['instalacion'] = $this->instalaciones_model->getInstalacion($id);
            $this->load->view('admin/includes/headNIm');
            $this->load->view('admin/instalaciones/editar', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/instalaciones', 'Volver');
        }        
    }
    
    public function updateInstalaciones($id = null, $nombre = null, $imagen = null, $descripcion = null){       
        if($imagen === NULL){
            $data['result'] = $this->instalaciones_model->editarInstalacionSinImagen($id, $nombre, $descripcion);
        }else{
            $data['result'] = $this->instalaciones_model->editarInstalacion($id, $nombre, $imagen, $descripcion);
        }
        $data['instalaciones'] = $this->instalaciones_model->getInstalaciones();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/instalaciones/index', $data);
    }
    
    public function EliminarInstalacion() {
      if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['result'] = $this->instalaciones_model->eliminarInstalacion($id);
            $data['instalaciones'] = $this->instalaciones_model->getInstalaciones();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/instalaciones/index', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/instalaciones', 'Volver');
        }        
    }
}

