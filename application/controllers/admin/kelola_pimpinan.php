<?php 
session_start();
	class Kelola_pimpinan extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if(!empty($this->session->userdata('admin')))
			{
				$this->load->model('datakepala');
			}
			else
			{
				redirect('home');
			}
		}
		public function index()
		{
			$this->load->view('style');
			$data['pimpinan']=$this->datakepala->all();
			$this->load->view('admin/form_pimpinan',$data);
		}
		public function update()
		{
			$this->datakepala->update();
			$this->session->set_flashdata('pesan','Data Pimpinan Telah Di Update!');
			redirect('admin/kelola_pimpinan');
		}
	}