<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('admin/Empleado_model');
        $this->load->model('admin/Servicio_model');
        $this->load->model('admin/Jefe_Servicio_model');
        $this->check_session();
    }

    public function index() {
        $data['servicios'] = $this->Servicio_model->getServicios();
        $this->load->view('admin/includes/head');
        $this->load->view('admin/servicios/index', $data);
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

    public function crearServicio() {
        if (null === ($this->input->post('nombre'))) {
            $data['empleados'] = $this->Empleado_model->getEmpleados();
            $this->load->view('admin/includes/head');
            $this->load->view('admin/servicios/crear', $data);
        } else {
            $nombre_post = $this->input->post('nombre');
            $descripcion_post = $this->input->post('descripcion');
            $idEmpleado_post = $this->input->post('idEmpleado');

            $data['result'] = $this->Servicio_model->crearServicio($nombre_post, $descripcion_post);
            $idServicio = $this->Servicio_model->getIdServicio($nombre_post); // pedir al Modelo de Servicios la cantidad de servicios que hay en bd para dar un supuesto Id de servicio y poder crear un jefe, dado que id servicio es auto_increment.

            $data['result_jefe'] = $this->Jefe_Servicio_model->crearJefeServicio($idEmpleado_post, 5, $idServicio, null);
            $data['servicios'] = $this->Servicio_model->getServicios();

            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/servicios/index', $data);
        }
    }

    public function editarFormularioServicios() {
        $data['empleados'] = $this->Empleado_model->getEmpleados();
        if ($this->input->get('id') !== null && $this->input->get('idJ') !== null) {
            $id = $this->input->get('id');
            $idJefeServicio = $this->input->get('idJ');
            $data['servicio'] = $this->Servicio_model->getServicio($id);
            $data['jefe'] = $this->Jefe_Servicio_model->getJefeServicio($idJefeServicio)->result_array();
            $this->load->view('admin/includes/head');
            $this->load->view('admin/servicios/editar', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/servicios', 'Volver');
        }
    }

    public function updateServicios() {
        $id_post = $this->input->post('hiddenId');
        $idJefeServicio_post = $this->input->post('hiddenJefe');
        $nombre_post = $this->input->post('nombre');
        $descripcion_post = $this->input->post('descripcion');
        $idEmpleado_post = $this->input->post('idEmpleado');
        $data['result'] = $this->Servicio_model->editarServicio($id_post, $nombre_post, $descripcion_post);
        print_r('$idJefeServicio_post');
        print_r($idJefeServicio_post);
        $data['result_jefe'] = $this->Jefe_Servicio_model->editarJefeServicio($idJefeServicio_post, $idEmpleado_post);
        $data['servicios'] = $this->Servicio_model->getServicios();
        $data['tipo'] = 'editar';
        $this->load->view('admin/includes/head');
        $this->load->view('admin/servicios/index', $data);
    }

    public function eliminarServicio() {
      if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $idJefe = $this->Jefe_Servicio_model->getJefeXservicio($id);
            $data['result'] = $this->Servicio_model->eliminarServicio($id);
            $data['result_jefe'] = $this->Jefe_Servicio_model->eliminarJefeServicio($idJefe);
            $data['servicios'] = $this->Servicio_model->getServicios();
            $data['tipo'] = 'eliminar';
            $this->load->view('admin/includes/head');
            $this->load->view('admin/servicios/index', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/servicios', 'Volver');
        }
    }
}
