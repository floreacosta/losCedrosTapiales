<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        
        $this->load->helper('url');
        $this->check_session();
    }

    public function index(){
        
        $validation = array(
            array('field' => 'user', 'rules' => 'required'),
            array('field' => 'pass', 'rules' => 'required'),
        );
        $this->form_validation->set_rules($validation);
        if($this->form_validation->run()){
            $user_post = $this->input->post('user');
            $pass_post = $this->input->post('pass');
                if($this->_resolve_user_login($user_post, $pass_post)){
                    $user_id = $this->_get_user_ID_from_user($user_post);
                    $ip_address = $this->input->ip_address();
                    $create_session = array(
                        'id_usuario' => $user_id,
                        'ip_address' => $ip_address 
                    );
                    $this->session->set_userdata($create_session);
                    
                    redirect(base_url()."admin/index");
                }
            
        }       
        $this->load->view('admin/includes/head');
        $this->load->view('admin/login');
    }
    
    private function _resolve_user_login($user, $pass){
        $this->db->where('usuario', $user);
        $hash = $this->db->get('usuarios')->row('pass');
        return $this->_verify_password_hash($pass, $hash);
    }
    
    private function _get_user_ID_from_user($user){
        $this->db->select('id');
        $this->db->from('usuarios');
        $this->db->where('usuario', $user);
        return $this->db->get()->row('id');
    }
    
    private function _verify_password_hash($pass, $hash){
        return password_verify($pass, $hash);
    }
    
    public function check_session(){
        $id_usuario = $this->session->userdata('id_usuario');
        if($id_usuario){
            redirect(base_url()."admin/index");
        }        
    }   
}
