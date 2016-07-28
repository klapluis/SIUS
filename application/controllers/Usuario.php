<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('encrypt');
        $this->load->model('Usuario_model');
        $this->load->model('UnidadSalud_model');
    }

    public function editar() {
        $data['title'] = "Modificar Datos";
        $data['main'] = 'Usuario/frmModificarUsuario';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $data['datosU'] = $this->Usuario_model->getUsuario($this->session->userdata['esta_logeado']['idUsuario']);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }

    public function guardar($id) {
        $clave= $this->input->post('pass1');
        $respuesta=$this->input->post('respuesta');
        $encrypt_clave = $this->encrypt->encode($clave);
        $encrypt_respuesta=$this->encrypt->encode($respuesta);
        $datos = array(
            'NOMBRE' => $this->input->post('Nombre'),
            'APELLIDO' => $this->input->post('Apellido'),
            'CLAVE' =>$encrypt_clave,
            'CEDULA' => $this->input->post('cedula'),
            'CORREO' => $this->input->post('email'),
            'DIRECCION' => $this->input->post('direccion'),
            'TELEFONO' => $this->input->post('telefono'),
            'RESPUESTA' => $encrypt_respuesta,
        );
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = 'true';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('Foto')) {
            $this->session->set_flashdata('error', 'Error Al Cargar La Imagen');
            $datos['FOTO'] = 'uploads/Cuentas_de_usuario.png';
        } else {
            $datosFoto = $this->upload->data();
            chmod($datosFoto['full_path'], 0777);
            $datos['FOTO'] = 'uploads/' . $datosFoto['file_name'];
            $this->session->set_flashdata('error', 'Carga Exitosa');
        }
        $this->Usuario_model->actualizar($id,$datos);
            redirect('usuario/editar', 'refresh');
    }

    function modificarFoto($id) {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = 'true';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('Foto')) {
            $this->session->set_flashdata('error', 'No selecciono una imagen');
            redirect('usuario/editar/' . $id, 'refresh');
        } else {
            $datosFoto = $this->upload->data();
            chmod($datosFoto['full_path'], 0777);
            $foto['FOTO'] = 'uploads/' . $datosFoto['file_name'];
            $this->Usuario_model->actualizar($id, $foto);
            $this->session->set_flashdata('error', 'Foto actualizada');
            redirect('usuario/editar/' . $id, 'refresh');
        }
    }
    public function configuracion(){
        echo 'configuracion';
    }
}
