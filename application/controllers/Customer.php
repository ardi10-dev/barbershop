<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');

    if(empty($this->session->userdata('email'))){
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Anda belum login!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('auth/login');
      }
      elseif($this->session->userdata('role') != 'Admin'){
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Anda tidak punya akses ke halaman ini!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('customer/dashboard');
      }
    }
  

    function index()
    {
        $data['judul'] ="Kelola Customer"; 
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->Customer_model->getDataCustomer();


        $this->load->view("layout/admin_header", $data);
        $this->load->view("admin/vw_customer", $data);
        $this->load->view("layout/admin_footer");
    }

    public function deleteDataCustomer($id)
    {
        $this->Customer_model->delDataCustomer($id);

        redirect('customer/');
    }

    public function edit($id)
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $this->Customer_model->edit($id);

        $this->load->view("layout/admin_header", $data);
        $this->load->view("admin/vw_ubah_customer", $data);
        $this->load->view("layout/admin_footer");
		//redirect(base_url('admin'));
	}

    public function updateDataCustomer($id)
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'role' => $this->input->post('role'),
        ];

        $this->Customer_model->updDataCustomer($id, $data);

        redirect('customer');
    }
}
?>