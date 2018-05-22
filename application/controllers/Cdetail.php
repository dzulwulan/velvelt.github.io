<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cdetail extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_komentar');
        $this->load->model('m_transaksi');
    } 
    public function index(){
        $this->load->view('detail1');

    }
    public function getdetail($getdetail,$id){
        $data = array(
            'detail'=>$this->m_katalog->getdetail($getdetail),
            'komentar1'=> $this->m_komentar->showKomentar($id) 
        );
        $this->load->view('detail1',$data);
    }
    public function addKomentar($id_katalog,$nama_katalog){
        $komentar=$this->input->post('isikomentar');
        $userkomentar=$this->input->post('namakomentar');
        $data= array(
            'username'=>$userkomentar,
            'kometar'=>$komentar,
            'id_katalog'=>$id_katalog
        );
        $query=$this->m_komentar->insertKomentar($data);
        if(!$query){
            echo"<script>";
            echo "alert('Thank you for comment')";
            echo"</script>";
            redirect('Cdetail/getdetail/'.$nama_katalog.'/'.$id_katalog);
        }
    }
    // public function showKomentar($id_katalog){
    //    $data =array(
    //        'komentar1'=> $this->m_komentar->showKomentar($id_katalog) 
    //    );
    //    $this->load->view('detail1', $data);
    // }

    
}
