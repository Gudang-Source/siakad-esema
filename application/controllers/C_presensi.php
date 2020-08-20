<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_presensi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_presensi');
		$this->load->model('M_kelas');
		$this->load->model('M_siswa');
	}

	public function index()
	{
		$data['kelas']=$this->M_kelas->listKelas();
		$data['siswa']=$this->M_siswa->listSiswa();
		$this->load->view('menuadm/presensi', $data);
	}

	public function wherekls(){
		$where = $this->input->post('kode_kls');
		if($where != null){
			$data['siswa']=$this->M_siswa->wherKls($where);
		}else{
			$data['siswa']=$this->M_siswa->listSiswa();
		}
		$data['kelas']=$this->M_kelas->listKelas();
		$this->load->view('menuadm/presensi', $data);
	}

	public function update(){
		$dat=array(
			'kode'	=>	$this->input->post('kode'),
			'alpha'	=>	$this->input->post('alpha'),
			'ijin'	=>	$this->input->post('ijin'),
			'sakit'	=>	$this->input->post('sakit'),
		);
		$kode=$this->input->post('kode');
		$this->M_presensi->update($dat, $kode);
		$nisn=$this->input->post('nisn');
		$data['presensi']=$this->M_presensi->getPresensiWhereId($nisn);
		$this->load->view('menuadm/presensi_detail', $data);
	}

}