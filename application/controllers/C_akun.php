<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_akun extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_akun');
	}

	public function index()
	{
		$data['akun']=$this->M_akun->listAkun();
		$this->load->view('menuadm/akun', $data);
	}

	public function add(){
		$dat = array(
			'uname'	=>	$this->input->post('uname'),
			'pwd'	=>	md5($this->input->post('pwd')),
			'level'	=>	$this->input->post('level')
		);
		$this->M_akun->insert($dat);
		redirect('C_admin/akun');
	}

	public function update(){
		$dat=array(
			'uname'	=>	$this->input->post('uname'),
			'pwd'	=>	md5($this->input->post('pwd')),
			'level'	=>	$this->input->post('level')
		);
		$where=$this->input->post('uname_old');
		$this->M_akun->update($dat, $where);
		redirect('C_admin/akun');
	}

}