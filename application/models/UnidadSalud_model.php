<?php
class UnidadSalud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function guardar($data) {
        $this->db->insert('unidad_salud', $data);
        return $this->db->insert_id();
    }

    function actualizar($id, $datos) {
        $this->db->where('unidad_salud.IDUNIDADSALUD', $id);
        $this->db->update('unidad_salud', $datos);
    }
    function actualizarPorNombre($nombreUS, $datos){
        $this->db->where('unidad_salud.NOMBRE_OFICIAL', $nombreUS);
        $this->db->update('unidad_salud', $datos);
    }

    public function getUnidades($id) {
        $this->db->select('*');
        $this->db->from('unidad_salud');
        $this->db->where('unidad_salud.usuarioidUsuario', $id);
        $lista = $this->db->get();
        if ($lista->num_rows() > 0) {
            return $lista->result_array();
        } else {
            return null;
        }
    }
    
    public function getInformacionMaps($id) {
        $this->db->select('`NOMBRE_OFICIAL`, `LUCRO`, `LONGITUD`, `LATITUD`');
        $this->db->from('unidad_salud');
        $this->db->where('unidad_salud.usuarioidUsuario', $id);
        $lista = $this->db->get();
        if ($lista->num_rows() > 0) {
            return $lista->result_array();
        } else {
            return null;
        }
    }
    
    public function getUnidad($idU,$idUnidad) {
        $condition = "usuarioidUsuario =" . "'" . $idU . "' AND " . "IDUNIDADSALUD =" . "'" . $idUnidad . "'";
        $this->db->select('*');
        $this->db->from('unidad_salud');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    function eliminar($id) {
        $this->db->where('unidad_salud.IDUNIDADSALUD', $id);
        $this->db->delete('unidad_salud');
    }
}
