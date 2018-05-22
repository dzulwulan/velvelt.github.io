<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CUpdate extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('update');
        
    }
    public function update($username){
        $alamat=$this->input->post('alamat');
        $nohp=$this->input->post('nohp');
        $pass=$this->input->post('pass');
        $konpass=$this->input->post('konpass');

        $data = array(
            'username'=>$username,
            'userpassword'=>$konpass,
            'alamatuser'=>$alamat,
            'notelpuser'=>$nohp
        );
        $query=$this->m_user->updateProfile($username,$data);
        $this->load->view('update');

    }
    
}
?>