<?php
class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function getUsuario($username) {
        $condition = "CORREO =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function getUsuarioID($id){
        $condition = "IDUSUARIO =" . "'" . $id . "'";
        $this->db->select('*');
        $this->db->from('usuario');
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
