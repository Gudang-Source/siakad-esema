<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rguru extends CI_Controller {

	function __construct(){ 
		parent::__construct();
		$this->load->model('M_rapot');
		$this->load->model('M_kelas');
		$this->load->model('M_siswa');

		// $this->load->library(array('session'));
		// $this->load->library('user_agent'); //deklarasi mengaktifkan library pagination
		if($this->session->userdata('level') != "1") {  
			redirect('');  
		}
	} 

	public function index()
	{
		$this->load->view('index');
	}

	public function rapot()
	{
		$nip = $this->session->userdata('uname');
		$data['kelas']=$this->M_kelas->listKelas();
		$data['siswa']=$this->M_siswa->listSiswaWhrGur($nip);
		$this->load->view('menugur/rapot', $data);
	}
	public function detailrapot($id)
	{
		$data['rapot']=$this->M_rapot->getRapotWhereId($id);
		$this->load->view('menugur/rapot_detail', $data);
	}
	public function editrapot($nisn, $idmp)
	{
		$data['rapot']=$this->M_rapot->getSis($nisn, $idmp);
		$this->load->view('menugur/rapot_edit', $data);
	}
}
