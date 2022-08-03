<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Layanan_model');

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
				$data['judul']="Kelola layanan";
				$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
				$data['layanan']=$this->Layanan_model->getDataLayanan();


				$this->load->view("layout/admin_header", $data);
				$this->load->view("admin/vw_layanan", $data);
				$this->load->view("layout/admin_footer");
			}

			public function deleteDataLayanan($id) {
				$this->Layanan_model->delDataLayanan($id);
				redirect('layanan/');
			}

			public function tambah() {
				$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();

				$this->load->view("layout/admin_header", $data);
				$this->load->view("admin/vw_tambah_layanan");
				$this->load->view("layout/admin_footer");
				//redirect(base_url('admin'));
			}

			public function createDataLayanan() {
				// $data=[ 'nama_layanan'=> $this->input->post('nama_layanan'),
				// 'deskripsi'=> $this->input->post('deskripsi'),
				// 'harga'=> $this->input->post('harga'),
				// ];

				// $this->db->insert('layanan', $data);

				// redirect('layanan');
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
				$data['layanan']=$this->Layanan_model->getDataLayanan();
				$this->form_validation->set_rules('nama_layanan', 'Nama Layanan', 'required', [ 'required'=> 'Nama Layanan Wajib di isi'
					]);
				$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [ 'required'=> 'Deskripsi Wajib di isi'
					]);
                $this->form_validation->set_rules('harga', 'Harga', 'required', [ 'required'=> 'Harga Wajib di isi'
					]);
                
                    if ($this->form_validation->run() == false) {
                        $this->load->view("layout/admin_header", $data);
                        $this->load->view("admin/vw_tambah_layanan", $data);
                        $this->load->view("layout/admin_footer");
                        } else {
                        $data = [
                        'nama_layanan' => $this->input->post('nama_layanan'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'harga' => $this->input->post('harga'),
                        
                        ];
                        $this->Layanan_model->insert($data);
                        $this->session->set_flashdata('message', '<div class="alert alert-success"
                        role="alert">Data Layanan Berhasil Ditambah!</div>');
                        redirect('layanan');
			}
        }

			public function edit($id) {
				$data['user']=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
				$user=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
				$data['layanan']=$this->Layanan_model->edit($id);

				$this->load->view("layout/admin_header", $data);
				$this->load->view("admin/vw_ubah_layanan", $data);
				$this->load->view("layout/admin_footer");
				//redirect(base_url('admin'));
                

			}

			public function updateDataLayanan($id) {
				$user=$this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
				$data=[ 'id_layanan'=> $this->input->post('id_layanan'),
				'nama_layanan'=> $this->input->post('nama_layanan'),
				'deskripsi'=> $this->input->post('deskripsi'),
				'harga'=> $this->input->post('harga'),
				];

				$this->Layanan_model->updDataLayanan($id, $data);

				redirect('layanan');
			}
		}

		?>
