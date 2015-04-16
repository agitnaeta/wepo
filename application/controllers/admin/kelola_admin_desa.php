<?php 
session_start();
	class kelola_admin_desa extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if(!empty($this->session->userdata('admin')))
			{
				$this->load->model('dataadmin_desa');
			}
			else
			{
				redirect('beranda');
			}

		}
		public function index()
		{
			$data['admin']=$this->dataadmin_desa->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_admin_desa',$data);
		}

		public function tambah()
		{
			$data=array(
				'nip'=>$this->input->post('nip'),
				'nama_admin'=>$this->input->post('nama_admin'),
				'desa'=>$this->input->post('desa'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);
			$this->dataadmin_desa->input($data);
			$this->session->set_flashdata('pesan'," Data Berhasil Di Tambah!");
			redirect('admin/kelola_admin_desa','refresh');
		}
		public function form_edit($kode_admin)
		{
			$this->load->view('style');
			$data['admin']=$this->dataadmin_desa->one($kode_admin);
			$this->load->view('admin/form_edit_admin_desa',$data);
		}
		public function edit_admin()
		{
			
			$this->dataadmin_desa->update();
			$this->session->set_flashdata('pesan'," Data Berhasil Di Update!");
			redirect('admin/kelola_admin_desa','refresh');
		}
		public function cari()
		{
			$cari=$this->input->post('cari');
			$dataadmin_desa=$this->dataadmin_desa->cari($cari);
			if ($dataadmin_desa==null) {
				$this->session->set_flashdata('pesan'," Data '$cari' Kosong!");
				redirect('admin/kelola_admin_desa');
			}
			else
			{
				$this->load->view('style');
				$data['admin']=$dataadmin_desa;
				$this->load->view('admin/tabel_admin_desa',$data);
			}

		}
	}