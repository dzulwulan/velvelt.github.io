<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cpromo extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper(array('form','url')); 
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('promo');
        
    }

}