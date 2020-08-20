<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kelas extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_kelas');
	}
	
	public function index()
	{
		$data['kelas']=$this->M_kelas->listKelas();
		$this->load->view('menuadm/kelas', $data);
	}

	public function add(){
		$dat = array(
			'kode'	=>	$this->input->post('kode'),
			'nama'	=>	$this->input->post('nama'),
			'kode_jurusan'	=>	$this->input->post('kode_jurusan'),
			'nip_wali'	=>	$this->input->post('nip_wali'),
			
		);
		$this->M_kelas->insert($dat);
		redirect('C_admin/kelas');
	}

	public function update(){
		$dat=array(
			'kode'=>$this->input->post('kode'),
			'nama'=>$this->input->post('nama'),
			'kode_jurusan'	=>	$this->input->post('kode_jurusan'),
			'nip_wali'	=>	$this->input->post('nip_wali'),
			
		);
		$where=$this->input->post('kd_old');
		$this->M_kelas->update($dat, $where);
		redirect('C_admin/kelas');
	}

	// public function delete(){
	// 	$where=$this->input->post('kode');
	// 	$this->M_semester->delete($where);
	// 	redirect('C_admin/semester');
	// }
}