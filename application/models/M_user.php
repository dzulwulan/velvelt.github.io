<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_user extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function registrasi($data){
        $this->db->insert('user',$data); 
    } 
    public function login($username, $password){
        $query= $this->db->query("select count(*) as exist from user "."where username='$username' and userpassword='$password'"); 
        return $query->row_array(); 
    }

    public function getProfile($username){
        $this->db->where('username',$username);
        $query= $this->db->get('user');
        return $query->result_array();
    }
    public function updateProfile($username,$data){
        // $this->db->set($data);
        // $this->db_>where('username',$username);
        // $query=$this->db->update('user',$data);
        $this->db->update('user', $data, array('username' => $username));
    }
} 
?>