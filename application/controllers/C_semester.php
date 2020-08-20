<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_semester extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_semester');
	}
	
	public function index()
	{
		$data['semester']=$this->M_semester->listSemester();
		$this->load->view('menuadm/semester', $data);
	}

	public function add(){
		$dat = array(
			'kode'	=>	$this->input->post('kode'),
			'nama'	=>	$this->input->post('nama'),
			'status'	=>	$this->input->post('status')
		);
		$this->M_semester->insert($dat);
		redirect('C_admin/semester');
	}

	public function update(){
		$dat=array(
			'kode'=>$this->input->post('kode'),
			'nama'=>$this->input->post('nama'),
			'status'	=>	$this->input->post('status')
		);
		$where=$this->input->post('kd_old');
		$this->M_semester->update($dat, $where);
		redirect('C_admin/semester');
	}

	// public function delete(){
	// 	$where=$this->input->post('kode');
	// 	$this->M_semester->delete($where);
	// 	redirect('C_admin/semester');
	// }
}