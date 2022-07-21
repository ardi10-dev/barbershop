<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->model('User_model');

        // if(empty($this->session->userdata('username'))){
        //     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //       <strong>Anda belum login!</strong>
        //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //         <span aria-hidden="true">&times;</span>
        //       </button>
        //     </div>');
        //     redirect('auth/login');
        //   }
        //   elseif($this->session->userdata('role') != 'User'){
        //     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //       <strong>Anda tidak punya akses ke halaman ini!</strong>
        //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //         <span aria-hidden="true">&times;</span>
        //       </button>
        //     </div>');
        //     redirect('customer/dashboard');
        //   }
    }
    function index()
    {
        $data['judul'] ="Dashboard"; 
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $users = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $a = $this->Dashboard_model->dataCustomer();
        $b = $this->Dashboard_model->dataTransaksi();
        $c = $this->Dashboard_model->dataPegawai();
        $d = $this->Dashboard_model->dataLayanan();

        $data['count_customer'] = $a;
        $data['count_transaksi'] = $b;
        $data['count_pegawai'] = $c;
        $data['count_layanan'] = $d;

        $this->load->view("layout/admin_header", $data);
        $this->load->view("auth/dashboard", $data);
        $this->load->view("layout/admin_footer");
    }
  
    
}
