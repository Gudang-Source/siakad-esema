<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jurusan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_jurusan');
	}
	
	public function index()
	{
		$data['jurusan']=$this->M_jurusan->listJurusan();
		$this->load->view('menuadm/jurusan', $data);
	}

	public function add(){
		$dat = array(
			'kode'	=>	$this->input->post('kode'),
			'nama'	=>	$this->input->post('nama')
		);
		$this->M_jurusan->insert($dat);
		redirect('C_admin/jurusan');
	}

	public function update(){
		$dat=array(
			'kode'=>$this->input->post('kode'),
			'nama'=>$this->input->post('nama')

		);
		$where=$this->input->post('kd_old');
		$this->M_jurusan->update($dat, $where);
		redirect('C_admin/jurusan');
	}

}