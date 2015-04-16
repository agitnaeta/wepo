<?php 
	class Dataadmin_desa extends CI_Model
	{
		public function ceklogin($username,$password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query=$this->db->get('admin_desa');
			if ($query) {
				return $query;
			}
			else 
			{
				return null;
			}
		}
		public function all()
		{
			$query=$this->db->get('admin_desa');
			if ($query->num_rows()>0) 
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function input($data)
		{
			$this->db->insert('admin_desa',$data);
		}
		public function one($kode_admin)
		{
			$this->db->where('kode_admin',$kode_admin);
			$query=$this->db->get('admin_desa');
			if ($query) {
				return $query;
			}
			else 
			{
				return null;
			}
		}
		public function update()
		{
			$kode_admin=$this->input->post('kode_admin');
			$data=array(
				'nip'=>$this->input->post('nip'),
				'nama_admin'=>$this->input->post('nama_admin'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
				);
			$this->db->where('kode_admin',$kode_admin);
			$this->db->update('admin_desa',$data);
		}
		public function cari($cari)
		{
			$this->db->like('nama_admin',$cari);
			$this->db->or_like('nip',$cari);
			$query=$this->db->get('admin_desa');
			if ($query->num_rows()>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
	}