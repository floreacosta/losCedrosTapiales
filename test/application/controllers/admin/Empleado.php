<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller {
    public function __construct() {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('admin/Empleado_model');
        $this->load->model('admin/Doctor_model');
        $this->load->model('admin/Especialidad_model');
        $this->check_session();
    }

    public function index() {
        $data['empleados'] = $this->Empleado_model->getEmpleados();
        $this->load->view('admin/includes/headWoValidation');
        $this->load->view('admin/doctores/index', $data);
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

    public function crearEmpleado() {
        if (($this->input->post('nombre')) === null) {
            $data['especialidades'] = $this->Especialidad_model->getEspecialidades();
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/doctores/crear', $data);
        } else {
            $especialidades_post = explode(".", $this->input->post('especialidades'));
            array_pop($especialidades_post);

            $nombre_post = $this->input->post('nombre');
            $idDoctor = $this->Doctor_model->crearDoctor($nombre_post);

            foreach($especialidades_post as $especialidad) {
                $data['result'] = $this->Doctorxespecialidad_model->crearDoctorxespecialidad($idDoctor, $especialidad);
            }
            $data['doctores'] = $this->Doctorxespecialidad_model->getDoctoresConEspecialidadesAgrupadas();
            $data['tipo'] = 'crear';
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/doctores/index', $data);
        }
    }

    public function editarFormularioDoctores() {
        if ($this->input->get('id') !== null) {
            $id = $this->input->get('id');
            $data['doctor'] = $this->Doctor_model->getDoctor($id);
            $data['especialidadesXDoctor'] = $this->Doctorxespecialidad_model->getEspecialidadesXDoctor($id);
            $data['especialidades'] = $this->Especialidad_model->getEspecialidades();
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/doctores/editar', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/doctores', 'Volver');
        }
    }

    public function updateDoctores() {
        $especialidades_post = explode(".", $this->input->post('especialidades'));
        array_pop($especialidades_post);

        $nombre_post = $this->input->post('nombre');
        $idDoctor = $this->input->post('hiddenId');
        $this->Doctorxespecialidad_model->eliminarDoctorxespecialidad($idDoctor);

        $data['result'] = $this->Doctor_model->editarDoctor($idDoctor, $nombre_post);
        foreach($especialidades_post as $especialidad) {
            $this->Doctorxespecialidad_model->crearDoctorxespecialidad($idDoctor, $especialidad);
        }

        $data['tipo'] = 'editar';
        $data['doctores'] = $this->Doctorxespecialidad_model->getDoctoresConEspecialidadesAgrupadas();
        $this->load->view('admin/includes/headWoValidation');
        $this->load->view('admin/doctores/index', $data);
    }

    public function EliminarDoctor() {
        if ($this->input->get('id') !== null) {
            $idDoctor = $this->input->get('id');
            $this->Doctor_model->eliminarDoctor($idDoctor);
            $data['result'] = $this->Doctorxespecialidad_model->eliminarDoctorxespecialidad($idDoctor);
            $data['tipo'] = 'eliminar';
            $data['doctores'] = $this->Doctorxespecialidad_model->getDoctoresConEspecialidadesAgrupadas();
            $this->load->view('admin/includes/headWoValidation');
            $this->load->view('admin/doctores/index', $data);
        } else {
            echo "Ha ocurrido un error, inténtelo de nuevo por favor";
            echo anchor(base_url().'admin/doctores', 'Volver');
        }
    }
}
