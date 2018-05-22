<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_komentar extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function insertKomentar($data){
        $this->db->insert('komentar',$data); 
    }

    public function showKomentar($id_katalog){
        $this->db->where('komentar.id_katalog',$id_katalog);
        $query= $this->db->get('komentar');
        return $query->result_array();
    }
        
}