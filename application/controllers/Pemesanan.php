<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
		$this->load->model('User_model');
        $this->load->model('Layanan_model');
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
		//   elseif($this->session->userdata('role') != 'U'){
		// 	$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// 	  <strong>Anda tidak punya akses ke halaman ini!</strong>
		// 	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 		<span aria-hidden="true">&times;</span>
		// 	  </button>
		// 	</div>');
		// 	redirect('customer/dashboard');
		//   }
	}
	public function index()
	{
        $data['judul'] ="Transaksi"; 
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->getDataTransaksi();
        $data['layanan'] = $this->Layanan_model->getDataLayanan();
        $this->load->view("layout/user_header", $data);
        $this->load->view("users/form_pemesanan", $data);
        $this->load->view("layout/user_footer", $data);
	}
    
	public function createDataPemesanan()
    {
		
		$data['user']=$this->User_model->getBy();
        $data = [
            'id_user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'tanggallahir' => $this->input->post('tanggallahir'),
            'no_hp' => $this->input->post('no_hp'),
            'gambar' => "default.jpg",
        ];

        $this->db->insert('Pemesanan', $data);

        redirect('user/vw_dashboard_user');
    }
}
