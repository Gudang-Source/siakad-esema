<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rapot extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_rapot');
		$this->load->model('M_kelas');
		$this->load->model('M_siswa');
	}

	public function index()
	{
		$data['kelas']=$this->M_kelas->listKelas();
		$data['siswa']=$this->M_siswa->listSiswa();
		$this->load->view('menuadm/rapot', $data);
	}

	public function wherekls(){
		$where = $this->input->post('kode_kls');
		if($where != null){
			$data['siswa']=$this->M_siswa->wherKls($where);
		}else{
			$data['siswa']=$this->M_siswa->listSiswa();
		}
		$data['kelas']=$this->M_kelas->listKelas();
		$this->load->view('menuadm/rapot', $data);
	}

	public function update(){
		$dat=array(
			'nisn'	=>	$this->input->post('nisn'),
			'nilai'	=>	$this->input->post('nilai')
		);
		$nisn=$this->input->post('nisn');
		$idmp=$this->input->post('kode_mp');
		$this->M_rapot->update($dat, $nisn, $idmp);
		$data['rapot']=$this->M_rapot->getRapotWhereId($nisn);
		$this->load->view('menugur/rapot_detail', $data);
	}

}