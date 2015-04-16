<?php 	
session_start();
	class Kelola_super_admin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if(!empty($this->session->userdata('admin')))
			{
				$this->load->model('dataadmin');
			}
			else
			{
				redirect ('beranda');
			}

		}
		public function index()
		{
			$this->load->view('style');
			$data['superadmin']=$this->dataadmin->all();
			$this->load->view('admin/form_admin',$data);
		}
		public function update()
		{
			$this->dataadmin->update();
			$this->session->set_flashdata('pesan','Data Sudah Di Update!');
			redirect('admin/kelola_super_admin');
		}
	}