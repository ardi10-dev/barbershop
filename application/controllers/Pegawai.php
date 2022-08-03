<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Pegawai_model');

		if(empty($this->session->userdata('email'))) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Anda belum login !</strong> <button type="button"class="close"data-dismiss="alert"aria-label="Close"> <span aria-hidden="true">&times; </span> </button> </div>');
redirect('auth/login');
			}

			elseif($this->session->userdata('role') !='Admin') {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Anda tidak punya akses ke halaman ini !</strong> <button type="button"class="close"data-dismiss="alert"aria-label="Close"> <span aria-hidden="true">&times; </span> </button> </div>');
redirect('customer/dashboard');
				}
			}

			function index() {
				$data['judul']="Kelola Pegawai";
				$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
				$data['pegawai']=$this->Pegawai_model->getDataPegawai();


				$this->load->view("layout/admin_header", $data);
				$this->load->view("admin/vw_pegawai", $data);
				$this->load->view("layout/admin_footer");
			}

			public function deleteDataPegawai($id) {
				$this->Pegawai_model->delDataPegawai($id);

				redirect('pegawai/');
			}

			public function tambah() {
				$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();

				$this->load->view("layout/admin_header", $data);
				$this->load->view("admin/vw_tambah_pegawai");
				$this->load->view("layout/admin_footer");
				//redirect(base_url('admin'));
			}

			public function createDataPegawai() {
				// $data = [
				//     'nama' => $this->input->post('nama'),
				//     'alamat' => $this->input->post('alamat'),
				//     'tempatlahir' => $this->input->post('tempatlahir'),
				//     'tanggallahir' => $this->input->post('tanggallahir'),
				//     'no_hp' => $this->input->post('no_hp'),
				//     'gambar' => $_FILES['gambar']['name']

				// ];

				// $config['upload_path']  = 'assets/img/profile/';
				// $config['allowed_types']    = 'gif|jpg|png';
				// $this->load->library('upload', $config);
				// $this->upload->do_upload('gambar');
				// $this->upload->data();
				// $this->upload->display_errors();
				// $this->db->insert('pegawai', $data);

				// redirect('pegawai');
				$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
				$data['pegawai']=$this->Pegawai_model->getDataPegawai();
				$this->form_validation->set_rules('nama', 'Nama', 'required', [ 'required'=> 'Nama Wajib di isi'
					]);
				$this->form_validation->set_rules('alamat', 'Alamat', 'required', [ 'required'=> 'Alamat Wajib di isi'
					]);
				$this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required', [ 'required'=> 'Tempat Lahir Wajib di isi'
					]);
				$this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required', [ 'required'=> 'Tanggal Lahir Wajib di isi'
					]);
				$this->form_validation->set_rules('no_hp', 'No Handphone', 'required', [ 'required'=> 'No Handphone Wajib di isi'
					]);
				

				if ($this->form_validation->run()==false) {
					$this->load->view("layout/admin_header", $data);
					$this->load->view("admin/vw_tambah_pegawai", $data);
					$this->load->view("layout/admin_footer");
				}

				else {
					$data=[ 'nama'=> $this->input->post('nama'),
					'alamat'=> $this->input->post('alamat'),
					'tempatlahir'=> $this->input->post('tempatlahir'),
					'tanggallahir'=> $this->input->post('tanggallahir'),
					'no_hp'=> $this->input->post('no_hp'),
					'gambar'=> $_FILES['gambar']['name']];
					$config['upload_path']='assets/img/profile/';
					$config['allowed_types']='gif|jpg|png';


					$this->load->library('upload', $config);
					$this->upload->do_upload('gambar');
					$this->upload->data();
					$this->upload->display_errors();

                    $this->db->insert('pegawai', $data);
					$this->session->set_flashdata('message', '<div class="alert alert-success"
                    role="alert">Data Pegawai Berhasil Ditambah !</div>');
                    redirect('Pegawai');
					}
				}

				public function edit($id) {
					$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
					$user=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
					$data['pegawai']=$this->Pegawai_model->edit($id);

					$this->load->view("layout/admin_header", $data);
					$this->load->view("admin/vw_ubah_pegawai", $data);
					$this->load->view("layout/admin_footer");
					//redirect(base_url('admin'));
				}

				public function updateDataPegawai($id) {
					$user=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
                    $data['pegawai']=$this->Pegawai_model->getDataPegawai();
					$data=[ 'nama'=> $this->input->post('nama'),
					'alamat'=> $this->input->post('alamat'),
					'tempatlahir'=> $this->input->post('tempatlahir'),
					'tanggallahir'=> $this->input->post('tanggallahir'),
					'no_hp'=> $this->input->post('no_hp'),
					'gambar'=> $_FILES['gambar']['name']];
					$config['upload_path']='assets/img/profile/';
					$config['allowed_types']='gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->do_upload('gambar');
					$this->upload->data();
					$this->upload->display_errors();

					$this->Pegawai_model->updDataPegawai($id, $data);

					redirect('pegawai');

				}
			}

			?>
