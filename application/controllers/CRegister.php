<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CRegister extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper(array('form','url'));
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('register');
    }
   
    function summary_insert(){
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $adress=$this->input->post('address');
        $password=$this->input->post('password');
        $nohp=$this->input->post('number');
        $data = array(
            'username'=>$username,
            'userpassword'=>$password,
            'alamatuser'=>$adress,
            'notelpuser'=>$nohp,
            'emailuser'=>$email
        );
        $query=$this->m_user->registrasi($data);
        if (!$query){
            redirect('Home');
        } else {
            $this->session->set_flashdata('error',
            'fail sign up');
        }
    }
}

?>
