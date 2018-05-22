<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_transaksi extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database(); 
    }

    public function insertTransaksi($data){ 
        $this->db->insert('transaksi',$data); 

    } 

    public function viewcart($username){  
                $this->db->distinct();
                $this->db->select('*');
                $this->db->from('transaksi');
                $this->db->join('katalog', 'transaksi.id_katalog = katalog.id_katalog'); 
                $this->db->join('user', 'user.username = transaksi.username');
                $this->db->where('transaksi.username',$username);
                $this->db->where('transaksi.statuspembayaran','unpaid');
                $query = $this->db->get(); 
                return $query->result_array();
    }  

    public function deletecart($id_katalog){
        $this->db->where('id_katalog',$id_katalog); 
        $this->db->delete('transaksi'); 

    } 

    public function totalpembayaran($username){
        $query= $this->db->query("select sum(totalharga) as 'total' from transaksi where username ='$username'");
        return $query->result_array();
    }

    public function updatestatus($username){
        $this->db->set('statuspembayaran','paid');
        $this->db->where('username',$username);
        $this->db->update('transaksi');
    }

}
