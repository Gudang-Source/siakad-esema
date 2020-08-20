<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jadwal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_jadwal');
	}

	public function index()
	{
		$data['jadwal']=$this->M_jadwal->listJadwal();
		$this->load->view('menuadm/jadwal', $data);
	}

	public function update(){
		$dat=array(
			'kode_mp'	=>	$this->input->post('kode_mp'),
			'kode_kelas'	=>	$this->input->post('kode_kelas'),
			'kode_semester' => $this->input->post('kode_semester'),
			'kode_ta' => $this->input->post('kode_ta'),
			'hari' => $this->input->post('hari'),
			'waktu' => $this->input->post('waktu')
		);
		$idkls=$this->input->post('kode_kelas');
		$idmp=$this->input->post('kode_mp');
		$this->M_jadwal->update($dat, $idkls, $idmp);
		$data['jadwal']=$this->M_jadwal->getJadwalWhereId($idkls);
		$this->load->view('menuadm/jadwal_detail', $data);
	}

}