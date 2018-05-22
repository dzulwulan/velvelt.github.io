<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CProfile extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('profile');
    }
    public function getProfile($username){
        $data['profile']=$this->m_user->getProfile($username);
        $this->load->view('profile',$data);
    }
}