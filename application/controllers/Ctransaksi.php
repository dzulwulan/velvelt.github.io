<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ctransaksi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_komentar');
        $this->load->model('m_transaksi');
        $this->load->model('m_checkout');
    } 
    public function index(){
        $this->load->view('detail1');

    }

    public function insertTransaksi($username,$id_katalog,$harga){
        $jumlah=$this->input->post('jumlah');
        $this->db->where('id_katalog',$id_katalog);
        $harga=$this->db->get('katalog','harga')->result_array()[0]['harga_katalog'];
        $total=(int)$harga*(int)$jumlah;
        $status="unpaid"; 
        $data= array(
            'username'=> $username,
            'id_katalog'=>$id_katalog,
            'jumlahbarang'=>$jumlah,
            'statuspembayaran'=>$status,
            'totalharga'=>$total
        );
        $query=$this->m_transaksi->insertTransaksi($data); 
        if(!$query){
            
            echo"<script>";
            echo "alert('Thank you for buying,please check your cart')";
            echo"</script>";
            redirect('Ckatalog/show');
         
        }
    }
    public function getTotal(){
        $username=$_SESSION['username'];
       $data['totalharga']= $this->m_transaksi->totalpembayaran($username);
       $this->load->view('cart',$data);
    }
    public function insertCheckout(){

    }

    
}
