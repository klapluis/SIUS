    <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load form helper library
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');
        // Load session library
        $this->load->library('session');
        $this->load->model('Login_model');
        $this->load->model('UnidadSalud_model');
        $this->load->library('encrypt');
    }

    public function index($data = array()) {
        $data['title'] = "Login";
        $this->load->vars($data);
        $this->load->view('frmLogin');
    }

    public function page_Admin() {
        $data['title'] = "Admin Page";
        $data['main'] = 'Principal/frmPrincipal';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }

    public function validar() {
        $username = $this->input->post('email');
        $clave = $this->input->post('password');
        $result = $this->Login_model->getUsuario($username);
        if ($result != NULL) {
            if ($clave === $this->encrypt->decode($result[0]->CLAVE)) {
                $captcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6Ld6xCMTAAAAALEb-9ChmsbZnt6BWkSlnkhKs0S7&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR']), TRUE);
                if ($captcha['success'] === TRUE) {
                    $session_data = array(
                        'idUsuario' => $result[0]->IDUSUARIO,
                        'nombre' => $result[0]->NOMBRE,
                        'apellido' => $result[0]->APELLIDO,
                        'email' => $result[0]->CORREO,
                        'tipo_usuario' => $result[0]->TIPO_USUARIO,
                        'estado' => $result[0]->ESTADO
                    );
                    $this->session->set_userdata('esta_logeado', $session_data);
                    redirect('login/page_Admin', 'refresh');
                } else {
                    redirect('login/PreguntaSeguridad/'.$result[0]->IDUSUARIO, 'refresh');
                }
            } else {
                $data = array(
                    'message' => 'Invalido El <strong>Password</strong>');
                $this->index($data);
            }
        } else {
            $data = array(
                'message' => 'Invalido El <strong>Email</strong>');
            $this->index($data);
        }
    }
    public function validarPregunta(){
        $id=$this->input->post('idUsuario');
        $result = $this->Login_model->getUsuarioID($id);
        $respuesta = $this->input->post('respuesta');
        if ($respuesta === $this->encrypt->decode($result[0]->RESPUESTA)) {
            $session_data = array(
                        'idUsuario' => $result[0]->IDUSUARIO,
                        'nombre' => $result[0]->NOMBRE,
                        'apellido' => $result[0]->APELLIDO,
                        'email' => $result[0]->CORREO,
                        'tipo_usuario' => $result[0]->TIPO_USUARIO,
                        'estado' => $result[0]->ESTADO
                    );
                    $this->session->set_userdata('esta_logeado', $session_data);
                    redirect('login/page_Admin', 'refresh');
        }else{
            $data = array(
                'message' => 'Respuesta <strong>Incorrecta</strong>');
            $this->index($data);
        }
    }

    public function PreguntaSeguridad($id) {
        $data['title'] = "Login";
        $data['idUsuario'] =$id;
        $this->load->vars($data);
        $this->load->view('frmPreguntaSeguridad');
    }

    public function logout() {
        $sess_array = array(
            'idUsuario' => ' ',
            'nombre' => ' ',
            'apellido' => ' ',
            'email' => ' ',
            'tipo_usuario' => ' ',
            'estado' => ' ',
        );
        $this->session->unset_userdata('esta_logeado', $sess_array);
        $data['message'] = 'Vuelva Pronto...';
        $this->session->sess_destroy();
        $this->load->vars($data);
        $this->load->view('frmLogin');
    }

    public function gestionInf() {
        $data['title'] = "Admin Page";
        $data['main'] = 'Principal/frmGstionInf';
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }

    public function googleMaps() {
        $this->load->library('googlemaps');// llamada a la libreria googlemaps
        $config['center'] = '-3.993771, -79.204728';//Posicion por  inicial
        $config['zoom'] = 'auto';// zoom 
        $this->googlemaps->initialize($config);//Inicializa el mapa con las configuraciones 
        //**************Marcadores ****************//
        // Se obtiene la Informacion de las Unidades de Salud
        $data = $this->UnidadSalud_model->getInformacionMaps($this->session->userdata['esta_logeado']['idUsuario']);
        $i=0;
        $marker = array();
        foreach ($data as $infUS) { 
            $latitud=$infUS['LATITUD'];
            $longitud=$infUS['LONGITUD'];
            
            //Arreglo con la informacion de cada marcador
            $marker[$i]=array(
                'position'=> "$latitud,$longitud",
                'infowindow_content'=>$infUS["NOMBRE_OFICIAL"],
                'icon'=>base_url().'img/icon.png',
                'draggable'=> true,
                'ondragend'=>'$("#Latitud").val(marker_'.$i.'.getPosition().lat());$("#Longitud").val(marker_'.$i.'.getPosition().lng());$("#Nombre_Oficial").val(this.get("content"));',
                'onclick' =>'$("#Latitud").val(marker_'.$i.'.getPosition().lat());$("#Longitud").val(marker_'.$i.'.getPosition().lng());$("#Nombre_Oficial").val(this.get("content"));'
            );
            
            $this->googlemaps->add_marker($marker[$i]);
            $i++;
        }
        //print_r($marker);
        $data['map'] = $this->googlemaps->create_map();
        $data['lista'] = $this->UnidadSalud_model->getUnidades($this->session->userdata['esta_logeado']['idUsuario']);
        $data['title'] = "Google Maps";
        $data['main'] = 'Principal/frmGoogleMaps';        
        $this->load->vars($data);
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    public function actualizar(){
        $id= $this->input->post("Nombre_Oficial");
        $lista = array(
            'LONGITUD' => $this->input->post("Longitud"),
            'LATITUD' => $this->input->post("Latitud"),
        );
        echo "<script>alert('Formulario enviado con exito....!!!! ');</script>";
        $this->UnidadSalud_model->actualizarPorNombre($id, $lista);
        redirect('Login/googleMaps', 'refresh');
    }
}
