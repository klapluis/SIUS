<?php
class Servicios_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function guardar($data) {
        $this->db->insert('servicios', $data);
        return $this->db->insert_id();
    }

    function actualizar($id, $datos) {
        $this->db->where('servicios.IDSERVICIO', $id);
        $this->db->update('servicios', $datos);
    }
    
    public function getServicios($idU,$unicodigo) {
        $condition = "unidad_SaludIDUNIDADSALUD =" . "'" . $idU . "' AND " . "unidad_SaludUNICODIGO =" . "'" . $unicodigo . "'";
        $this->db->select('*');
        $this->db->from('servicios');
        $this->db->where($condition);
        $lista = $this->db->get();
        if ($lista->num_rows() > 0) {
            return $lista->result_array();
        } else {
            return null;
        }
    }

    public function getServicio($idU,$unicodigo) {
        $condition = "unidad_SaludIDUNIDADSALUD =" . "'" . $idU . "' AND " . "unidad_SaludUNICODIGO =" . "'" . $unicodigo . "'";
        $this->db->select('*');
        $this->db->from('servicios');
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
        $this->db->where('servicios.IDSERVICIO', $id);
        $this->db->delete('servicios');
    }
}
