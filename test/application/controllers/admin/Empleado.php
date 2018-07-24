<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('admin/Empleado_model');
        $this->check_session();
    }

    public function logout() {
        $this->session->unset_userdata('id_usuario');
        $this->session->unset_userdata('ip_address');
        $this->session->sess_destroy();
        redirect(base_url()."admin/login");
    }

    public function check_session() {
        $id_usuario = $this->session->userdata('id_usuario');
        if (!$id_usuario) {
            redirect(base_url()."admin/login");
        }
    }

    public function index() {
        $data['empleados'] = $this->Empleado_model->getEmpleados();
        $this->load->view('admin/includes/headWoValidation');
        $this->load->view('admin/empleados/index', $data);
    }

    public function crearEmpleado() {
        if (($this->input->post('nombre')) === null) {
            $data['cargos'] = $this->Empleado_model->getCargos();
            $data['sexo'] = $this->Empleado_model->getOpcionesSexo();
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/empleados/crear', $data);
        } else {
            $nombre_post = $this->input->post('nombre');
            $idCargo_post = $this->input->post('idCargo');
            $sexo_post = $this->input->post('sexo');
            $data['result'] = $this->Empleado_model->crearEmpleado($nombre_post, $idCargo_post, $sexo_post);
            $data['empleados'] = $this->Empleado_model->getEmpleados();
            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/empleados/index', $data);
        }
    }

    public function editarFormularioEmpleado() {
        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $idCargo = $this->input->get('idC');
            $data['empleado'] = $this->Empleado_model->getEmpleado($id);
            $data['cargos'] = $this->Empleado_model->getCargos();
            $data['cargo'] = $this->Empleado_model->getCargo($idCargo);
            $data['sexo'] = $this->Empleado_model->getOpcionesSexo();
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/empleados/editar', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/empleados', 'Volver');
        }
    }

    public function updateEmpleado() {
        $id = $this->input->post('hiddenId');
        $nombre_post = $this->input->post('nombre');
        $idCargo_post = $this->input->post('idCargo');
        $sexo_post = $this->input->post('sexo');
        $data['result'] = $this->Empleado_model->editarEmpleado($id, $nombre_post, $idCargo_post, $sexo_post);
        $data['empleados'] = $this->Empleado_model->getEmpleados();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/headWoValidation');
        $this->load->view('admin/empleados/index', $data);
    }

    public function eliminarEmpleado() {
        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $this->Empleado_model->eliminarEmpleado($id);
            $data['empleados'] = $this->Empleado_model->getEmpleados();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/empleados/index', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/empleados', 'Volver');
        }
    }
}
