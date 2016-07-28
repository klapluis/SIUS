<?php
class Especialidad_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function guardar($data) {
        $this->db->insert('especialidad', $data);
        return $this->db->insert_id();
    }

    function actualizar($id, $datos) {
        $this->db->where('especialidad.IDESPECIALIDAD', $id);
        $this->db->update('especialidad', $datos);
    }
    
    function eliminar($idUS,$idAE) {
        $condition = "unidad_SaludIDUNIDADSALUD =" . "'" . $idUS . "' AND " . "IDESPECIALIDAD =" . "'" . $idAE . "'";
        $this->db->where($condition);
        $this->db->delete('especialidad');
    }
    
    public function getEspecialidades($idU,$unicodigo) {
        $condition = "unidad_SaludIDUNIDADSALUD =" . "'" . $idU . "' AND " . "unidad_SaludUNICODIGO =" . "'" . $unicodigo . "'";
        $this->db->select('*');
        $this->db->from('especialidad');
        $this->db->where($condition);
        $lista = $this->db->get();
        if ($lista->num_rows() > 0) {
            return $lista->result_array();
        } else {
            return null;
        }
    }

    public function getEspecialidad($idU,$unicodigo) {
        $condition = "unidad_SaludIDUNIDADSALUD =" . "'" . $idU . "' AND " . "unidad_SaludUNICODIGO =" . "'" . $unicodigo . "'";
        $this->db->select('*');
        $this->db->from('especialidad');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
