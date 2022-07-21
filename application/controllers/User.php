<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Layanan_model');
        $this->load->model('Transaksi_model');

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
        $data['judul'] ="Dashboard User"; 
        
        $data['user']=$this->User_model->getBy();
        $this->load->view("layout/user_header", $data);
        $this->load->view("users/vw_dashboard_user", $data);
        $this->load->view("layout/user_footer", $data);
       // var_dump($data);
    }

    function profile()
    {
        $data['judul'] ="Dashboard BOOK"; 
        $data['user']=$this->User_model->getBy();
        $data['riwayat'] = $this->Transaksi_model->getDataTransaksiUser();
        $this->load->view("layout/user_header", $data);
        $this->load->view("users/profile", $data);
        $this->load->view("layout/user_footer", $data);
    }

    function update() {
        $data=[ 
        'nama'=> $this->input->post('nama'),
        'no_hp'=> $this->input->post('no_hp'),
        'email'=> $this->input->post('email'),
        ];

        $id = $this->input->post('id_user');
        $this->User_model->update(['id_user'=> $id], $data);
        
        // var_dump($data);
        //  die;

        redirect('User/profile');
       
    }
    
    
    
}
?>