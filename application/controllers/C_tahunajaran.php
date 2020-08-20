<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tahunajaran extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_tahunajaran');
	}
	
	public function index()
	{
		$data['tahun_ajaran']=$this->M_tahunajaran->listTahun_ajaran();
		$this->load->view('menuadm/tahun_ajaran', $data);
	}

	public function add(){
		$dat = array(
			'kode'	=>	$this->input->post('kode'),
			'nama'	=>	$this->input->post('nama'),
			
		);
		$this->M_tahunajaran->insert($dat);
		redirect('C_admin/tahun_ajaran');
	}

	public function update(){
		$dat=array(
			'kode'=>$this->input->post('kode'),
			'nama'=>$this->input->post('nama'),
			
		);
		$where=$this->input->post('kd_old');
		$this->M_tahunajaran->update($dat, $where);
		redirect('C_admin/tahun_ajaran');
	}

	// public function delete(){
	// 	$where=$this->input->post('kode');
	// 	$this->M_semester->delete($where);
	// 	redirect('C_admin/semester');
	// }
}