<?php
	class Datapenduduk extends CI_Model
	{
		public function all()
		{
			$query=$this->db->get('penduduk');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function add()
		{
			$data=array(
				'nik'=>$this->input->post('nik'),
				'nama'=>$this->input->post('nama'),
				'tempat_lahir'=>$this->input->post('tempat_lahir'),
				'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
				'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
				'rt'=>$this->input->post('rt'),
				'rw'=>$this->input->post('rw'),
				'desa'=>$this->input->post('desa'),
				'kecamatan'=>$this->input->post('kecamatan'),
				'status'=>$this->input->post('status'),
				'pekerjaan'=>$this->input->post('pekerjaan'),
				'kewarganegaraan'=>$this->input->post('kwn'),
				'berlaku_hingga'=>$this->input->post('berlaku_hingga')
				);
			$this->db->insert('penduduk',$data);
		}
		public function one($nik)
		{
			$this->db->where('nik',$nik);
			$query=$this->db->get('penduduk');
			if ($query->num_rows()>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function delete($nik)
		{
			$this->db->where('nik',$nik);
			$this->db->delete('penduduk');
		}
		public function cari($cari)
		{
			$this->db->like('nama',$cari);
			$this->db->or_like('nik',$cari);
			$query=$this->db->get('penduduk');
			if ($query->num_rows()>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
	}