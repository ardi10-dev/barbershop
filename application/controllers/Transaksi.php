<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Layanan_model');
        $this->load->model('User_model');
        $this->load->model('Transaksi_model');

        if(empty($this->session->userdata('email'))){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Anda belum login!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
            redirect('auth/login');
          }
          // elseif($this->session->userdata('role') != 'Admin'){
          //   $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          //     <strong>Anda tidak punya akses ke halaman ini!</strong>
          //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          //       <span aria-hidden="true">&times;</span>
          //     </button>
          //   </div>');
          //   redirect('customer/dashboard');
          // }
	}
    
    function index()
    {
        $data['judul'] ="Kelola Transaksi"; 
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->getDataTransaksi();


        $this->load->view("layout/admin_header", $data);
        $this->load->view("admin/vw_transaksi", $data);
        $this->load->view("layout/admin_footer");
    }
    
    // function riwayat1(){
    //     $data['judul'] ="Riwayat";
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['riwayat'] = $this->Transaksi_model->getDataTransaksiUser();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('users/profile', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    public function deleteDataTransaksi($id)
    {
        $this->Transaksi_model->delDataTransaksi($id);
        $this->session->set_flashdata('msg', 'Berhasil Dihapus');

        redirect('transaksi/index');
    }

    public function edit($id)
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['transaksi'] = $this->Transaksi_model->edit($id);

        $this->load->view("layout/admin_header", $data);
        $this->load->view("admin/vw_ubah_transaksi", $data);
        $this->load->view("layout/admin_footer");
		//redirect(base_url('admin'));
	}

    public function updateDataTransaksi($id)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = [
            'id_layanan' => $this->input->post('id_layanan'),
            //'user_id' => $this->input->post('user_id'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam'),
            'id_layanan' => $this->input->post('id_layanan'),
            'harga' => $this->input->post('harga'),
            'status' => $this->input->post('status'),
        ];

        $this->Transaksi_model->updDataTransaksi($id, $data);

        redirect('transaksi/index');
    }
}
?>