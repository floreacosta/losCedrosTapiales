<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
    public function __construct(){
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it        
        $this->load->helper('url'); 
        $this->load->database();
        $this->load->model('admin/usuarios_model');
        $this->check_session();
    }
    
    public function index(){
        $data['usuarios'] = $this->usuarios_model->getUsuarios();
        echo anchor(base_url().'/admin/index/logout','Cerrar sesión');
        echo '</br>';
        echo anchor(base_url().'admin/index','Volver al menú principal');
        echo '</br>';
        echo anchor(base_url().'admin/usuarios/crearUsuario','Crear nuevo usuarios');
        $this->load->view('admin/usuarios/index', $data);
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
    
    public function crearUsuario(){
        if(null === ($this->input->post('nombre'))){
            $this->load->view('admin/usuarios/crear');
        }else{
            $nombre_post = $this->input->post('nombre');
            $usuario_post = $this->input->post('user');
            $password_post = password_hash($this->input->post('pass'), PASSWORD_BCRYPT);            
            $data['result'] = $this->usuarios_model->crearUsuario($nombre_post, $usuario_post, $password_post);        
            $data['usuarios'] = $this->usuarios_model->getUsuarios();
            $this->load->view('admin/usuarios/index', $data);        
        }
            
    }
    
    public function editarFormularioUsuario() {
        
        if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $data['usuario'] = $this->usuarios_model->getUsuario($id);
            $this->load->view('admin/usuarios/editar', $data);
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/usuarios', 'Volver');
        }        
    }

    public function updateUsuario(){
        $id_post = $this->input->post('hiddenId');
        $old_nombre_user = $this->input->post('hiddenNombre');
        $nombre_post = $this->input->post('nombre');
        $usuario_post = $this->input->post('user');
        $old_pass = $this->input->post('old_pass');
        $new_pass = $this->input->post('new_pass');
        $confirmation_new_password = $this->input->post('confirmation_new_password');
        
        if($this->_comprobaciones_password($old_nombre_user, $old_pass, $new_pass, $confirmation_new_password)){
            $password_post = password_hash($new_pass, PASSWORD_BCRYPT);
            $data['result'] = $this->usuarios_model->editarUsuario($id_post, $nombre_post, $usuario_post, $password_post);        
            $data['usuarios'] = $this->usuarios_model->getUsuarios();
            $this->load->view('admin/usuarios/index', $data);
        }else{
            echo "ha ocurrido un error";
        }
    }
    
    private function _comprobaciones_password($old_nombre_user, $old_pass, $new_pass, $confirmation_new_password){
        if($this->_resolve_password_match($old_nombre_user, $old_pass)){
            if($this->_resolve_new_password_match($new_pass, $confirmation_new_password)){
                return true;
            }else{
                echo('La contraseña nueva no coincide con la confirmación');
                return false;
            }
        }else{
            echo('La contraseña anterior es incorrecta');
            return false;
        }
    }    

    private function _resolve_password_match($user, $pass){
        $this->db->where('usuario', $user);
        $hash = $this->db->get('usuarios')->row('pass');
        return $this->_verify_password_hash($pass, $hash);
    }
    
    private function _verify_password_hash($pass, $hash){
        return password_verify($pass, $hash);
    }
    
    private function _resolve_new_password_match($new_pass, $confirmation_new_password){
        if($new_pass === $confirmation_new_password){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function EliminarUsuario() {
      if($this->input->get('id') !== null){
            $id = $this->input->get('id');
            $this->usuarios_model->eliminarUsuario($id);
            redirect(base_url()."admin/usuarios");
        }else{
            echo "Ha ocurrido un error, intentelo de nuevo por favor";
            echo anchor(base_url().'admin/usuarios', 'Volver');
        }        
    }
}
