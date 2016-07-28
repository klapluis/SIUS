<?php 
class Servicios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('unidadSalud_model');
        $this->load->model('especialidad_model');
        $this->load->model('servicios_model');
    }

    public function index($id) {
        $data['title'] = "Formulario Servicios";
        $data['main'] = 'Servicios/frmCrearServicios';
        $data['lista'] = $this->unidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $data['idUS']= $id;
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    
    public function guardar($idUS){
        $infUS=$this->unidadSalud_model->getUnidad($this->session->userdata['esta_logeado']['idUsuario'], $idUS);
        $datos= array(
            'unidad_SaludIDUNIDADSALUD'=>$idUS,
            'unidad_SaludUNICODIGO'=>$infUS[0]->UNICODIGO,
            'DESCRIPCION'=>$this->input->post("Descripcion"),
            'DISPONIBILIDAD'=>$this->input->post("Disponibilidad"),
            'TELEFONO'=>$this->input->post("Telefono"),
            'NOMBRE_RESPONSABLE'=>$this->input->post("Nombre_Responsable"),
            'HORARIO'=>$this->input->post("Horario"),
        );
        $id = $this->servicios_model->guardar($datos);
        if ($id > 0) {
           redirect('unidadSalud/infU/' . $idUS, 'refresh');
        }else{
            $this->index($idUS);
        }
    }
    public function editar($idUS){
        $infUS=$this->unidadSalud_model->getUnidad($this->session->userdata['esta_logeado']['idUsuario'], $idUS);
        $data['title'] = "Formulario Servicios";
        $data['main'] = 'Servicios/frmEditarServicios';
        $data['lista'] = $this->unidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $data['idUS']= $idUS;
        $data['infS'] = $this->servicios_model->getServicios($idUS, $infUS[0]->UNICODIGO);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    public function actualizar($idUS){
        $infUS=$this->unidadSalud_model->getUnidad($this->session->userdata['esta_logeado']['idUsuario'], $idUS);
        $contador = $this->input->post('contador');
        for ($i = 1; $i <= $contador; $i++) {
            $idS=$this->input->post("idS".$i);
            $datos= array(
            'unidad_SaludIDUNIDADSALUD'=>$idUS,
            'unidad_SaludUNICODIGO'=>$infUS[0]->UNICODIGO,
            'DESCRIPCION'=>$this->input->post("Descripcion".$i),
            'DISPONIBILIDAD'=>$this->input->post("Disponibilidad".$i),
            'TELEFONO'=>$this->input->post("Telefono".$i),
            'NOMBRE_RESPONSABLE'=>$this->input->post("Nombre_Responsable".$i),
            'HORARIO'=>$this->input->post("Horario".$i),
            );
            $this->servicios_model->actualizar($idS, $datos);
        }
        redirect('unidadSalud/infU/' . $idUS, 'refresh');
    }
    function eliminar($idS,$idUS){
            $this->servicios_model->eliminar($idS);
             redirect('unidadSalud/infU/' . $idUS, 'refresh');
    }
}