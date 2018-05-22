<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CLogin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper('url');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('Login', array('error' => ' ' ));
        
    }
   
    function login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $result=$this->m_user->login($username,$password);
        if($result['exist']>0){ 

            $this->session->set_userdata('username',$username);
            $this->load->view('index', $username);
            $this->load->view('katalog1', $username);
            $this->load->view('katalog2', $username);
            $this->load->view('update', $username);
            $this->load->view('update', $username);
        
        }
        else {
            echo"gagal";
        }

    }
    function logout(){
        $this->session->unset_userdata($_SESSION['username']);
        $this->session->sess_destroy();
        redirect('','refresh');
    }
   
}

?>
