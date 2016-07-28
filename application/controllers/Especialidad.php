<?php
class Especialidad extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UnidadSalud_model');
        $this->load->model('Especialidad_model');
    }

    public function index($idUS) {
        $data['title'] = "Formulario Areas Especialidad";
        $data['main'] = 'AreasEspecialidad/frmCrearAEspecialidad';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $data['idUS']= $idUS;
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    public function editar($idUS){
        $infUS=$this->UnidadSalud_model->getUnidad($this->session->userdata['esta_logeado']['idUsuario'], $idUS);
        $data['title'] = "Formulario De Cartera De Servicios";
        $data['main'] = 'AreasEspecialidad/frmEditarAEspecialidad';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $data['idUS']= $idUS;
        $data['infE'] = $this->Especialidad_model->getEspecialidades($idUS, $infUS[0]->UNICODIGO);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    public function guardar($idUS){
        $infUS=$this->UnidadSalud_model->getUnidad($this->session->userdata['esta_logeado']['idUsuario'], $idUS);
        $datos= array(
            'unidad_SaludIDUNIDADSALUD'=>$idUS,
            'unidad_SaludUNICODIGO'=>$infUS[0]->UNICODIGO,
            'NOMBRE_SERVICIO'=>$this->input->post("Nombre_Servicio"),
            'NOMBRE'=>$this->input->post("Nombre"),
            'DISPONIBILIDAD'=>$this->input->post("Disponibilidad"),
            'TELEFONO'=>$this->input->post("Telefono"),
            'NOMBRE_PROFESIONAL_RESPONSABLE'=>$this->input->post("Nombre_Profesional_Responsable"),
            'HORARIO_ATENCION'=>$this->input->post("Horario_Atencion"),
            'DIAS_ATENCION'=>$this->input->post("Dias_Atencion")
        );
        $id = $this->Especialidad_model->guardar($datos);
        if ($id > 0) {
           redirect('unidadSalud/infU/' . $idUS, 'refresh');
        }else{
            $this->index($idUS);
        }
    }
    public function actualizar($idUS){
        $infUS=$this->UnidadSalud_model->getUnidad($this->session->userdata['esta_logeado']['idUsuario'], $idUS);
        $contador = $this->input->post('contador');
        for ($i = 1; $i <= $contador; $i++) {
            $idE=$this->input->post("idE".$i);
            $datos= array(
            'unidad_SaludIDUNIDADSALUD'=>$idUS,
            'unidad_SaludUNICODIGO'=>$infUS[0]->UNICODIGO,
            'NOMBRE_SERVICIO'=>$this->input->post("Nombre_Servicio".$i),
            'NOMBRE'=>$this->input->post("Nombre".$i),    
            'DISPONIBILIDAD'=>$this->input->post("Disponibilidad".$i),
            'TELEFONO'=>$this->input->post("Telefono".$i),
            'NOMBRE_PROFESIONAL_RESPONSABLE'=>$this->input->post("Nombre_Profesional_Responsable".$i),
            'HORARIO_ATENCION'=>$this->input->post("Horario_Atencio".$i),
            'DIAS_ATENCION'=>$this->input->post("Dias_Atencio".$i),
            );
            $this->Especialidad_model->actualizar($idE, $datos);
        }
        redirect('unidadSalud/infU/' . $idUS, 'refresh');
    }
    function eliminar($idUS,$idAE){
        $this->Especialidad_model->eliminar($idUS,$idAE);
        redirect('unidadSalud/infU/' . $idUS, 'refresh');
    }
}