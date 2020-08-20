<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rsiswa extends CI_Controller {

	function __construct(){ 
		parent::__construct();
		$this->load->model('M_rapot');
		$this->load->model('M_jadwal');
		$this->load->model('M_presensi');

		// $this->load->library(array('session'));
		// $this->load->library('user_agent'); //deklarasi mengaktifkan library pagination
		if($this->session->userdata('level') != "2") {  
			redirect('');  
		}
	} 

	public function index()
	{
		$this->load->view('index');
	}

	public function rapot()
	{
		$nisn = $this->session->userdata('uname');
		$data['rapot']=$this->M_rapot->getRapotWhereId($nisn);
		$this->load->view('menusis/rapot', $data);
	}

	public function jadwal()
	{
		$nisn = $this->session->userdata('uname');
		$data['jadwal']=$this->M_jadwal->getJdwSisWhereId($nisn);
		$this->load->view('menusis/jadwal', $data);
	}

	public function presensi()
	{
		$nisn = $this->session->userdata('uname');
		$data['presensi']=$this->M_presensi->getPresensiWhereId($nisn);
		$this->load->view('menusis/presensi', $data);
	}
}
