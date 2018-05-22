<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_checkout extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database(); 
    }

    public function insertCheckout($data){ 
        $this->db->insert('checkout',$data); 
    } 
}
