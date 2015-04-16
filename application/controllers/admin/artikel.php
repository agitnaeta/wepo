<?php 
	class Artikel Extends CI_Controller
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
				$this->session->set_flashdata('pesan',"Anda Harus Login Dulu!");
				redirect('beranda');
			}
		}
		public function index()
		{
			$this->load->view('style');
			$this->load->view('admin/form_artikel');
		}
	}