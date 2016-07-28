<?php
class UnidadSalud extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UnidadSalud_model');
        $this->load->model('Especialidad_model');
        $this->load->model('Servicios_model');
    }

    public function index() {
        $data['title'] = "Formulario Unidad De Salud";
        $data['main'] = 'UnidadSalud/frm_CrearUnidadS';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }

    public function listaU() {
        $data['title'] = "Administrar Unidades De Salud";
        $data['main'] = 'UnidadSalud/frm_Listar_UnidadesSalud';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    public function listaUPublicas(){
        $data['title'] = "Administrar Unidades De Salud";
        $data['main'] = 'UnidadSalud/frm_Listar_UnidadesSalud_Publicas';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    public function listaUPrivadas(){
        $data['title'] = "Administrar Unidades De Salud";
        $data['main'] = 'UnidadSalud/frm_Listar_UnidadesSalud_Privadas';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    public function infU($id) {
        $infU=$this->UnidadSalud_model->getUnidad($this->session->userdata['esta_logeado']['idUsuario'], $id);
        $data['title'] = "Información De La Unidaded De Salud";
        $data['main'] = 'UnidadSalud/frmInfUnidadS';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $data['infU'] = $infU;
        $data['infE'] = $this->Especialidad_model->getEspecialidades($infU[0]->IDUNIDADSALUD, $infU[0]->UNICODIGO);
        $data['infS'] = $this->Servicios_model->getServicios($infU[0]->IDUNIDADSALUD, $infU[0]->UNICODIGO);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }

    function guardarUS() {
        if ($this->validar_US() == true) {
            $lista = array(
                'usuarioidUsuario' => $this->session->userdata['esta_logeado']['idUsuario'],
                'UNICODIGO' => $this->input->post("Unicodigo"),
                'NOMBRE_OFICIAL' => $this->input->post("Nombre_Oficial"),
                'NOMBRE_COMUN' => $this->input->post("Nombre_Comun"),
                'DIRECCION' => $this->input->post("Direccion"),
                'TELEFONO' => $this->input->post("Telefono"),
                'PROVINCIA' => $this->input->post("Provincia"),
                'CANTON' => $this->input->post("Canton"),
                'PARROQUIA' => $this->input->post('Parroquia'),
                'PARROQUIA_TIPO' => $this->input->post("Parroquia_Tipo"),
                'ZONA' => $this->input->post("Zona"),
                'ZONA_DISTRIBUCION' => $this->input->post("Zona_Distribucion"),
                'DISTRITO' => $this->input->post("Distrito"),
                'DISTRITO_DISTRIBUCION' => $this->input->post("Distrito_Distribucion"),
                'CIRCUITO' => $this->input->post("Circuito"),
                'AREA_CODIGO' => $this->input->post("Area_Codigo"),
                'AREA' => $this->input->post("Area"),
                'RED_ATENCION' => $this->input->post("Red_Atencion"),
                'LUCRO' => $this->input->post("Lucro"),
                'INSTITUCION' => $this->input->post("Institucion"),
                'NIVEL_ATENCION' => $this->input->post("Nivel_Atencion"),
                'TIPOLOGIA' => $this->input->post("Tipologia"),
                'HORARIO_ATENCION' => $this->input->post("Horario_Atencion"),
                'LONGITUD' => $this->input->post("Longitud"),
                'LATITUD' => $this->input->post("Latitud")
            );
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = 'true';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('Foto')) {
                $this->session->set_flashdata('error', 'Error Al Cargar La Imagen');
                $lista['FOTO'] = 'uploads/US_defect.jpg';
            } else {
                $datosFoto = $this->upload->data();
                chmod($datosFoto['full_path'], 0777);
                $lista['FOTO'] = 'uploads/' . $datosFoto['file_name'];
                $this->session->set_flashdata('error', 'Carga Exitosa');
            }
            $id = $this->UnidadSalud_model->guardar($lista);
            if ($id > 0) {
                redirect('unidadSalud/infU/' . $id, 'refresh');
            }
        } else {
            $this->index();
        }
    }

    function validar_US() {
        $this->form_validation->set_rules('Unicodigo', 'Unicodigo', 'required|min_length[3]|max_length[25]|xss_clean|is_unique[unidad_salud.UNICODIGO]');
        $this->form_validation->set_rules('Nombre_Oficial', 'Nombre_Oficial', 'required|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Nombre_Comun', 'Nombre_Comun', 'required|min_length[2]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Direccion', 'Direccion', 'required|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Telefono', 'Telefono', 'required|min_length[3]|max_length[25]|xss_clean');
        $this->form_validation->set_rules('Canton', 'Canton', 'required|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Parroquia', 'Parroquia', 'required|min_length[4]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Zona_Distribucion', 'Zona_Distribucion', 'required|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Distrito', 'Distrito', 'required|min_length[2]|max_length[50]|xss_clean');
        $this->form_validation->set_rules('Distrito_Distribucion', 'Distrito_Distribucion', 'required|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Circuito', 'Circuito', 'required|min_length[2]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Area_Codigo', 'Area_Codigo', 'required|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Area', 'Area', 'required|min_length[3]|max_length[50]|xss_clean');
        $this->form_validation->set_rules('Red_Atencion', 'Red_Atencion', 'required|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Institucion', 'Institucion', 'required|min_length[2]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Tipologia', 'Tipologia', 'required|min_length[3]|max_length[100]|xss_clean');
        $this->form_validation->set_rules('Horario_Atencion', 'Horario_Atencion', 'required|min_length[2]|max_length[100]|xss_clean');

        $this->form_validation->set_message('required', 'Debe introducir el campo %s'); //50
        $this->form_validation->set_message('min_length', 'El campo %s debe ser de al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El campo %s debe ser menor que %s carácteres');
        $this->form_validation->set_message('is_unique', 'Este Codigo ya existe.');

        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function modificarFoto($id) {
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = 'true';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('Foto')) {
            $this->session->set_flashdata('error', 'No selecciono una imagen');
            redirect('unidadSalud/infU/' . $id, 'refresh');
        } else {
            $datosFoto = $this->upload->data();
            chmod($datosFoto['full_path'], 0777);
            $foto['Foto'] = 'uploads/' . $datosFoto['file_name'];
            $this->UnidadSalud_model->actualizar($id, $foto);
            $this->session->set_flashdata('error', 'Foto actualizada');
            redirect('unidadSalud/infU/' . $id, 'refresh');
        }
    }

    function modificar($id) {
        $lista = array(
            'usuarioidUsuario' => $this->session->userdata['esta_logeado']['idUsuario'],
            'UNICODIGO' => $this->input->post("Unicodigo"),
            'NOMBRE_OFICIAL' => $this->input->post("Nombre_Oficial"),
            'NOMBRE_COMUN' => $this->input->post("Nombre_Comun"),
            'DIRECCION' => $this->input->post("Direccion"),
            'TELEFONO' => $this->input->post("Telefono"),
            'PROVINCIA' => $this->input->post("Provincia"),
            'CANTON' => $this->input->post("Canton"),
            'PARROQUIA' => $this->input->post('Parroquia'),
            'PARROQUIA_TIPO' => $this->input->post("Parroquia_Tipo"),
            'ZONA' => $this->input->post("Zona"),
            'ZONA_DISTRIBUCION' => $this->input->post("Zona_Distribucion"),
            'DISTRITO' => $this->input->post("Distrito"),
            'DISTRITO_DISTRIBUCION' => $this->input->post("Distrito_Distribucion"),
            'CIRCUITO' => $this->input->post("Circuito"),
            'AREA_CODIGO' => $this->input->post("Area_Codigo"),
            'AREA' => $this->input->post("Area"),
            'RED_ATENCION' => $this->input->post("Red_Atencion"),
            'LUCRO' => $this->input->post("Lucro"),
            'INSTITUCION' => $this->input->post("Institucion"),
            'NIVEL_ATENCION' => $this->input->post("Nivel_Atencion"),
            'TIPOLOGIA' => $this->input->post("Tipologia"),
            'HORARIO_ATENCION' => $this->input->post("Horario_Atencion"),
            'LONGITUD' => $this->input->post("Longitud"),
            'LATITUD' => $this->input->post("Latitud"),
        );
        echo "<script>alert('Formulario enviado con exito....!!!! ');</script>";
        $this->UnidadSalud_model->actualizar($id, $lista);
        redirect('unidadSalud/infU/' . $id, 'refresh');
    }

    public function Upload() {
        $config["upload_path"] = "./files/";
        $config["allowed_types"] = 'xls';
        $config["max_size"] = '0';
        $this->upload->initialize($config);
        //$this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('error', 'No selecciono un <strong>Archivo correcto</strong>');
            echo ($this->upload->display_errors() .APPPATH);
            redirect('unidadSalud/listaU', 'refresh');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->library('PHPExcel');
            $objPHPExcel = PHPExcel_IOFactory::load('./files/' . $data['upload_data']['file_name']);
        }
        unlink($config["upload_path"] . '/' . $data['upload_data']['file_name']);
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection(); //estamos trayendo la coleccion de filas
        $header = array();
        $arr_data = array();
        foreach ($cell_collection as $cell) {
            # code...
            //aui estamos obteniendo las columnas a,b,c
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            //Aqui obtenemos el numero de filas
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            //
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            } else {
                $arr_data[$row][$column] = $data_value;
            }
        }
        $data["title"] = 'Tabla de Información';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $data["header"] = $header;
        $data["values"] = $arr_data;
        $data['main'] = 'UnidadSalud/frmTablaUS';
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    public function guardar() {
        $contador = $this->input->post('contador');
        for ($i = 1; $i <= $contador; $i++) {
            $lista = array(
                'usuarioidUsuario' => $this->session->userdata['esta_logeado']['idUsuario'],
                'UNICODIGO' => $this->input->post("Unicodigo".$i),
                'NOMBRE_OFICIAL' => $this->input->post("Nombre_Oficial".$i),
                'NOMBRE_COMUN' => $this->input->post("Nombre_Comun".$i),
                'DIRECCION' => $this->input->post("Direccion".$i),
                'TELEFONO' => $this->input->post("Telefono".$i),
                'PROVINCIA' => $this->input->post("Provincia".$i),
                'CANTON' => $this->input->post("Canton".$i),
                'PARROQUIA' => $this->input->post('Parroquia'.$i),
                'PARROQUIA_TIPO' => $this->input->post("Parroquia_Tipo".$i),
                'ZONA' => $this->input->post("Zona".$i),
                'ZONA_DISTRIBUCION' => $this->input->post("Zona_Distribucion".$i),
                'DISTRITO' => $this->input->post("Distrito".$i),
                'DISTRITO_DISTRIBUCION' => $this->input->post("Distrito_Distribucion".$i),
                'CIRCUITO' => $this->input->post("Circuito".$i),
                'AREA_CODIGO' => $this->input->post("Area_Codigo".$i),
                'AREA' => $this->input->post("Area".$i),
                'RED_ATENCION' => $this->input->post("Red_Atencion".$i),
                'LUCRO' => $this->input->post("Lucro".$i),
                'INSTITUCION' => $this->input->post("Institucion".$i),
                'NIVEL_ATENCION' => $this->input->post("Nivel_Atencion".$i),
                'TIPOLOGIA' => $this->input->post("Tipologia".$i),
                'HORARIO_ATENCION' => $this->input->post("Horario_Atencion".$i),
                'LONGITUD' => $this->input->post("Longitud".$i),
                'LATITUD' => $this->input->post("Latitud".$i),
                'FOTO' => 'uploads/US_defect.jpg'
            );
            $this->UnidadSalud_model->guardar($lista);
        }
        $this->listaU();
    }
    function eliminar($idUS){
            $this->UnidadSalud_model->eliminar($idUS);
            $this->listaU();
    }
}