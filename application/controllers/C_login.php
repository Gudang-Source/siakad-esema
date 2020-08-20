<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('M_login');
		$this->load->library(array('session'));
	} 

	public function index()
	{
		if($this->session->userdata('level') == "0") {  
			redirect(base_url('C_admin'));  
		} else if ($this->session->userdata('level') == "1") {
			redirect(base_url('C_rguru')); 
		}else if ($this->session->userdata('level') == "2") {
			redirect(base_url('C_rsiswa')); 
		}
	}

	public function aksi_login()
	{
		$uname=$this->input->post('username');
		$pwd=$this->input->post('password');
		$cek=$this->M_login->cek_login($uname,$pwd);
		if($cek>0){//jika ada ditabel
			$data_session=array(
					'uname'=>$cek->uname,
					'level'=> $cek->level
				);
			$this->session->set_userdata($data_session);  
			if($this->session->userdata('level')==0) {   
				redirect('C_admin');  
			}elseif($this->session->userdata('level')==1) {   
				redirect('C_rguru');  
			}elseif($this->session->userdata('level')==2) {   
				redirect('C_rsiswa');  
			}

		}else{
			echo "<script type=\"text/javascript\"> alert('username dan password salah!'); </script>";
			redirect('');
		}
	}


	function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
