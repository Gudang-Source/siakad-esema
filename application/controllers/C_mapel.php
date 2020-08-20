<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mapel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_mapel');
	}
	
	public function index()
	{
		$data['mapel']=$this->M_mapel->listMapel();
		$this->load->view('menuadm/mapel', $data);
	}

	public function add(){
		$dat = array(
			'kode'	=>	$this->input->post('kode'),
			'nama'	=>	$this->input->post('nama'),
			'kode_jurusan'	=>	$this->input->post('kode_jurusan')
		);
		$this->M_mapel->insert($dat);
		redirect('C_admin/mapel');
	}

	public function update(){
		$dat=array(
			'kode'=>$this->input->post('kode'),
			'nama'=>$this->input->post('nama'),
			'kode_jurusan'	=>	$this->input->post('kode_jurusan')

		);
		$where=$this->input->post('kd_old');
		$this->M_mapel->update($dat, $where);
		redirect('C_admin/mapel');
	}

}