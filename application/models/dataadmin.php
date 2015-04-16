<?php 
	class Dataadmin extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		public function ceklogin($username,$password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query=$this->db->get('super_admin');
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
			$query=$this->db->get('super_admin');
			if ($query->num_rows()>0) {
				return $query;
			}
			else 
			{
				return null;
			}
		}
		public function update()
		{
			$data=array('username'=>$this->input->post('username'),'password'=>$this->input->post('password'));
			$kode_admin=$this->input->post('kode_admin');
			$this->db->where('kode_admin',$kode_admin);
			$this->db->update('super_admin',$data);
		}
	}