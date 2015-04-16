<?php
session_start();
	class Beranda extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin_desa'))) 
			{
				$this->load->model('dataadmin');
				$this->load->model('datapenduduk');
				$this->load->model('dataadmin_desa');
				$this->load->model('datakepala');
			}
			else
			{
				$this->session->set_flashdata('pesan','Anda Harus Login Dulu!');
				redirect('beranda/login');
			}
		}
		public function index()
		{
			$session=$this->session->userdata('admin_desa');
			$data['username']=$session['username'];
			$this->load->view('style');
			$this->load->view('admin_desa/beranda',$data);
		}
		public function status()
		{
			$data['admin']=$this->dataadmin_desa->all();
			$data['penduduk']=$this->datapenduduk->all();
			$dataPimpinan=$this->datakepala->all();
			foreach ($dataPimpinan->result() as $row)
				$data['nama_camat']=$row->nama;
			$session=$this->session->userdata('admin');
			$data['username']=$session['username'];
			$this->load->view('style');
			$this->load->view('admin/home',$data);
		}
	}