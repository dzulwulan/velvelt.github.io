<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_katalog extends CI_Model {
    public function __construct() {
        $this->load->database();
    } 
    
    public function show_katalog(){
        $query = $this->db->get('katalog');
        // select*from katalog; 
        return $query->result(); 
    }  

    public function getdetail($getdetail){ 
        $this->db->where('nama_katalog', str_replace('%20',' ',$getdetail));
        $query = $this->db->get('katalog');
        return $query->result_array();
        
        
    }


}
?>