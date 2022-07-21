<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model','userrole');
    }
    // function index()
    // {
    //     $this->load->view("layout/auth_header");
    //     $this->load->view("auth/);
    //     $this->load->view("layout/auth_footer");
    // }

    function login()
    {
        $this->load->view("layout/auth_header");
        $this->load->view("auth/login");
        $this->load->view("layout/auth_footer");
    }
    function registrasi(){
        $this->load->view("layout/auth_header");
        $this->load->view("auth/registrasi");
        $this->load->view("layout/auth_footer");
    }
    public function cek_regis(){
        $data=[
            'nama'=>htmlspecialchars($this->input->post('nama',true)),
            'email'=>htmlspecialchars($this->input->post('email',true)),
            'no_hp'=>htmlspecialchars($this->input->post('no_hp',true)),
            'password'=>password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
            'role'=>"User",
            'gambar'=>'defaul.jpg'
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message','<div class="alert alert-success"role="alert">Selamat Akun Anda Berhasil Terdaftar, Silahkan Login!</div>');
        redirect('Auth');
    }
    public function cek_login(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $user=$this->db->get_where('user',['email'=>$email])->row_array();
        if($user){
            if(password_verify($password, $user['password'])){
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if($user['role']== 'Admin'){
                    redirect('Dashboard');
                }else{
                    redirect('User');
                }
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Belum Terdaftar!</div>');
                redirect('auth');
        }
    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil Logout!</div>');

        redirect('User');
    }
}
