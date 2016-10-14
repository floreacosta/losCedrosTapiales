<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    
    public function __construct(){
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        
        $this->load->helper('url');
        $this->check_session();
    }
    
    public function index(){
        $this->load->view('admin/includes/head');
        echo anchor(base_url().'/admin/index/logout','Cerrar sesión');
        echo '</br>';
        echo anchor(base_url().'admin/usuarios','Administrar usuarios');
        echo '</br>';
        echo anchor(base_url().'admin/coberturas','Administrar coberturas');
        echo '</br>';
        echo anchor(base_url().'admin/servicios','Administrar servicios');
        echo '</br>';
        echo anchor(base_url().'admin/instalaciones','Administrar instalaciones');
        echo '</br>';
        echo anchor(base_url().'admin/especialidades','Administrar especialidades');
        echo '</br>';
        echo anchor(base_url().'admin/doctores','Administrar doctores');
        $this->load->view('admin/index');
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
}
