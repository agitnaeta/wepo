<?php
session_start();
	class Kelola_penduduk extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('dataadmin');
				$this->load->model('datapenduduk');

			}
			else
			{
				$this->session->set_flashdata('pesan','Anda Harus Login Dulu!');
				redirect('beranda/login');
			}
		}
		public function form_tambah()
		{
			$this->load->view('style');
			$this->load->view('admin/form_tambah_penduduk');
		}
		public function form_edit($nik)
		{
			$data['penduduk']=$this->datapenduduk->one($nik);
			$this->load->view('style');
			$this->load->view('admin/form_edit_penduduk',$data);
		}
		public function index()
		{
			$session=$this->session->userdata('admin');
			$data['username']=$session['username'];
			$data['penduduk']=$this->datapenduduk->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_penduduk',$data);
		}
		public function tambah()
		{
			$this->datapenduduk->add();
			$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil Ditambah</div>');
			redirect('admin/kelola_penduduk');
		}
		 public function detail($nik)
		 {
		 	$this->load->view('style');
		 	$data['penduduk']=$this->datapenduduk->one($nik);
		 	$this->load->view('admin/detail_penduduk',$data);
		 }
		 public function hapus($nik)
		 {
		 	$this->datapenduduk->delete($nik);
		 	$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil dihapus</div>');
			redirect('admin/kelola_penduduk');
		 }
		 public function cari()
		 {
		 	$cari=$this->input->post('cari');
		 	$data_penduduk=$this->datapenduduk->cari($cari);
		 	if($data_penduduk==null)
		 	{
		 		$this->session->set_flashdata('pesan','<div class="alert alert-danger">Data tidak ditemukan!</div>');
		 		redirect('admin/kelola_penduduk');
		 	}
		 	else
		 	{
		 		$data['penduduk']=$data_penduduk;
		 		$this->load->view('style');
		 		$this->load->view('admin/tabel_penduduk',$data);
		 	}
		 	
		 }
	}
