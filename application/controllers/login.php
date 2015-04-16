<?php 
	class Login extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('dataadmin');
			$this->load->model('dataadmin_desa');
			$this->load->model('datakepala');
			$this->load->library('session');
		}
		public function logout()
		{
			$this->session->unset_userdata('admin');
			$this->session->unset_userdata('kepala');
			$this->session->unset_userdata('admin_desa');
			$this->session->all_userdata();

			redirect('beranda');
		}
		public function index()
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			
			$cekadmin=$this->dataadmin->ceklogin($username,$password);
			if($cekadmin->num_rows()>0)
			{
				foreach ($cekadmin->result() as $row)
				$session=array(
					'username'=>$row->username,
					'password'=>$row->password,
				);
			
				$this->session->set_userdata('admin', $session);
				redirect('admin/beranda');
			}
			else
			{
				$cekadmin_desa=$this->dataadmin_desa->ceklogin($username,$password);
				if ($cekadmin_desa!==null) 
				{
					foreach ($cekadmin_desa->result() as $row)
					$session=array(
						'username'=>$row->username,
						'password'=>$row->password,
						'desa'=>$row->desa,
						'nip'=>$row->nip,
						'nama_admin'=>$row->nama_admin,
					);
					$this->session->set_userdata('admin_desa',$session);
					$this->load->view('admin/beranda',$session);
				}
				else
				{
					$cekkepala=$this->datakepala->ceklogin($username,$password);
					if($cekadmin!==null)
					{
						foreach($cekkepala->result() as $row)
						$session=array(
							'username'=>$row->username,
							'kode_kepala'=>$kode_kepala,
							'nama'=>$row->nama
							);
						$this->session->set_userdata('kepala',$session);
						redirect('kepala/beranda');
					}
					else
					{
						$this->session->set_flashdata('pesan', 'Kombinasi Login Salah!');
						redirect('beranda/login');
					}
				}
			}
		}
	}