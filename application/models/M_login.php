<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	function cek_login($uname, $pwd){
		$this->db->select('*');
		$this->db->from('akun');
		$this->db->where('uname', $uname);
		$this->db->where('pwd', md5($pwd));
		return $this->db->get()->row();
	}

	function namaGuru($uname){
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where('nip', $uname);
        return $this->db->get()->row();
	}

	function namaMurid($uname){
		$this->db->select('*');
		$this->db->from('murid');
		$this->db->where('nisn', $uname);
        return $this->db->get()->row();
	}

}
 ?>
