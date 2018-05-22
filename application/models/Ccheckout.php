<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cchechout extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_checkout');
        $this->load->helper(array('form','url')); 
        $this->load->library('session'); 
        
    }
    
    public function insertcheckout($id_transaksi){
        $totalharga=$this->input->post['jumlah'];
        $alamatpengiriman=$this->input->post['adress'];
        $metodepembayaran=$this->input->post['metode'];
        $data= array(
            'id_transaksi'=>$id_transaksi,
            'metodepembayaran'=>$metode,
            'totalharga'=>$totalharga,
            'alamat_pengiriman'=>$alamatpengiriman
        );
        $this->m_checkout->insertcheckout($data);
        $this->load->view('cart');     
    }

}

    