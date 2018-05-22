<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ccart extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
        $this->load->model('m_katalog');
        $this->load->model('m_transaksi');
        $this->load->model('m_checkout');
    }
    public function index(){
        $this->load->view('cart');
        
    } 

    public function showtransaksi($username){ 
        $data['totalharga']= $this->m_transaksi->totalpembayaran($username);
        $data['detail']=$this->m_transaksi->viewcart($username); 
        $this->load->view('cart',$data); 
    } 

    public function deletetransaksi($id_katalog,$username){
        $query=$this->m_transaksi->deletecart($id_katalog);
        if(!$query){
            redirect('Ccart/showtransaksi/'.$id_katalog);
        } else {
            echo"gagal";
        }   
    }

    public function insertcheckout($username){
       $query=$this->m_transaksi->updatestatus($username);
       $totalbayar=$this->input->post('totalbayar');
       $alamatpengiriman=$this->input->post('adress');
       $metode=$this->input->post('metode');
       $data=array(
           'metodepembayaran'=>$metode,
           'totalharga'=>$totalbayar,
           'alamat_pengiriman'=>$alamatpengiriman,
           'username'=>$username
       );
       $qr=$this->m_checkout->insertCheckout($data);


    }


}