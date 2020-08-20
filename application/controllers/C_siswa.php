<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_siswa');
	}
	
	public function index()
	{
		$data['siswa']=$this->M_siswa->listSiswa();
		$this->load->view('menuadm/siswa', $data);
	}

	public function add(){
		$dat = array(
			'nisn'	=>	$this->input->post('nisn'),
			'nama'	=>	$this->input->post('nama'),
			'jk'	=>	$this->input->post('jk'),
			'alamat'	=>	$this->input->post('alamat'),
			'foto'	=>	$this->input->post('foto'),
			'kode_kelas'	=>	$this->input->post('kode_kelas'),
			
		);
		$this->M_siswa->insert($dat);
		redirect('C_admin/siswa');
	}

	public function update(){
		$dat=array(
			'nisn'	=>	$this->input->post('nisn'),
			'nama'	=>	$this->input->post('nama'),
			'jk'	=>	$this->input->post('jk'),
			'alamat'	=>	$this->input->post('alamat'),
			'foto'	=>	$this->input->post('foto'),
			'kode_kelas'	=>	$this->input->post('kode_kelas'),			
		);
		$where=$this->input->post('kd_old');
		$this->M_siswa->update($dat, $where);
		redirect('C_admin/siswa');
	}

	// public function delete(){
	// 	$where=$this->input->post('kode');
	// 	$this->M_semester->delete($where);
	// 	redirect('C_admin/semester');
	// }
}