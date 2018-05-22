<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CKatalog extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_katalog');
    }
    public function index(){
        $this->load->view('katalog1');
    }  

    public function show(){ 
        $data['katalog12'] = $this->m_katalog->show_katalog();
        $this->load->view('katalog1',$data); 
    } 

   

    

}

?>