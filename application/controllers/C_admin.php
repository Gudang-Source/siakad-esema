<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('M_jurusan');
		$this->load->model('M_mapel');
		$this->load->model('M_guru');
		$this->load->model('M_kelas');
		$this->load->model('M_siswa');
		$this->load->model('M_tahunajaran');
		$this->load->model('M_semester');
		$this->load->model('M_akun');
		$this->load->model('M_rapot');
		$this->load->model('M_jadwal');
		$this->load->model('M_presensi');

		// $this->load->library(array('session'));
		// $this->load->library('user_agent'); //deklarasi mengaktifkan library pagination
		if($this->session->userdata('level') != "0") {  
			redirect('');  
		}
	} 

	public function index()
	{
		$this->load->view('index');
	}

	public function jurusan()
	{
		$data['jurusan']=$this->M_jurusan->listJurusan();
		$this->load->view('menuadm/jurusan', $data);
	}
	public function addjurusan()
	{
		$this->load->view('menuadm/jurusan_add');
	}
	public function editjurusan($id)
	{
		$data['jurusan']=$this->M_jurusan->getJuWhereId($id);//record dari getBiodata
		$this->load->view('menuadm/jurusan_edit', $data);
	}
	public function deletejurusan($id)
	{
		$this->M_jurusan->delete($id);
		redirect('C_admin/jurusan');
	}

	public function guru()
	{
		$data['guru']=$this->M_guru->listGuru();
		$this->load->view('menuadm/guru', $data);
	}
	public function addguru()
	{
		$this->load->view('menuadm/guru_add');
	}
	public function editguru($id)
	{
		$data['guru']=$this->M_guru->getGurWhereId($id);//record dari getBiodata
		$this->load->view('menuadm/guru_edit', $data);
	}
	public function deleteguru($id)
	{
		$this->M_guru->delete($id);
		redirect('C_admin/guru');
	}

	public function mapel()
	{
		$data['mapel']=$this->M_mapel->listMapel();
		$this->load->view('menuadm/mapel', $data);
	}
	public function addmapel()
	{
		$this->load->view('menuadm/mapel_add');
	}
	public function editmapel($id)
	{
		$data['mapel']=$this->M_mapel->getMapWhereId($id);//record dari getBiodata
		$this->load->view('menuadm/mapel_edit', $data);
	}
	public function deletemapel($id)
	{
		$this->M_mapel->delete($id);
		redirect('C_admin/mapel');
	}

	public function siswa()
	{
		$data['siswa']=$this->M_siswa->listSiswa();
		$this->load->view('menuadm/siswa', $data);
	}

	public function addsiswa()
	{
		$this->load->view('menuadm/siswa_add');
	}
	public function editsiswa($id)
	{
		$data['siswa']=$this->M_siswa->getSemWhereId($id);//record dari getBiodata
		$this->load->view('menuadm/siswa_edit', $data);
	}
	public function deletesiswa($id)
	{
		$this->M_siswa->delete($id);
		redirect('C_admin/siswa');
	}

	//----------------------------------

	public function kelas()
	{
		$data['kelas']=$this->M_kelas->listKelas();
		$this->load->view('menuadm/kelas', $data);
	}

	public function addkelas()
	{
		$this->load->view('menuadm/kelas_add');
	}
	public function editkelas($id)
	{
		$data['kelas']=$this->M_kelas->getSemWhereId($id);//record dari getBiodata
		$this->load->view('menuadm/kelas_edit', $data);
	}
	public function deletekelas($id)
	{
		$this->M_kelas->delete($id);
		redirect('C_admin/kelas');
	}

	//---------------------------------------------

	public function tahun_ajaran()
	{
		$data['tahun_ajaran']=$this->M_tahunajaran->listTahun_ajaran();
		$this->load->view('menuadm/tahun_ajaran', $data);
	}

	public function addtahunajaran()
	{
		$this->load->view('menuadm/tahunajaran_add');
	}
	public function edittahunajaran($id)
	{
		$data['tahun_ajaran']=$this->M_tahunajaran->getSemWhereId($id);//record dari getBiodata
		$this->load->view('menuadm/tahunajaran_edit', $data);
	}
	public function deletetahunajaran($id)
	{
		$this->M_tahunajaran->delete($id);
		redirect('C_admin/tahun_ajaran');
	}

	public function semester()
	{
		$data['semester']=$this->M_semester->listSemester();
		$this->load->view('menuadm/semester', $data);
	}
	public function addsemester()
	{
		$this->load->view('menuadm/semester_add');
	}
	public function editsemester($id)
	{
		$data['semester']=$this->M_semester->getSemWhereId($id);//record dari getBiodata
		$this->load->view('menuadm/semester_edit', $data);
	}
	public function deletesemester($id)
	{
		$this->M_semester->delete($id);
		redirect('C_admin/semester');
	}

	public function akun()
	{
		$data['akun']=$this->M_akun->listAkun();
		$this->load->view('menuadm/akun', $data);
	}
	public function addakun()
	{
		$this->load->view('menuadm/akun_add');
	}
	public function editakun($id)
	{
		$data['akun']=$this->M_akun->getAkunWhereId($id);//record dari getBiodata
		$this->load->view('menuadm/akun_edit', $data);
	}
	public function deleteakun($id)
	{
		$this->M_akun->delete($id);
		redirect('C_admin/akun');
	}

	public function rapot()
	{
		$data['kelas']=$this->M_kelas->listKelas();
		$data['siswa']=$this->M_siswa->listSiswa();
		$this->load->view('menuadm/rapot', $data);
	}
	public function detailrapot($id)
	{
		$data['rapot']=$this->M_rapot->getRapotWhereId($id);
		$this->load->view('menuadm/rapot_detail', $data);
	}
	public function editrapot($id)
	{
		$data['rapot']=$this->M_rapot->getSis($id);
		$this->load->view('menuadm/rapot_edit', $data);
	}
	public function deleterapot($id)
	{
		$this->M_rapot->delete($id);
		$data['rapot']=$this->M_rapot->getRapotWhereId($nisn);
		$this->load->view('menuadm/rapot_detail', $data);
	}

	public function jadwal()
	{
		$data['jadwal']=$this->M_jadwal->listJadwal();
		$this->load->view('menuadm/jadwal', $data);
	}
	public function detailjadwal($id)
	{
		$data['jadwal']=$this->M_jadwal->getJadwalWhereId($id);
		$this->load->view('menuadm/jadwal_detail', $data);
	}
	public function editjadwal($idkls, $idmp)
	{
		$data['jadwal']=$this->M_jadwal->getJdw($idkls, $idmp);
		$this->load->view('menuadm/jadwal_edit', $data);
	}

	public function presensi()
	{
		$data['kelas']=$this->M_kelas->listKelas();
		$data['siswa']=$this->M_siswa->listSiswa();
		$this->load->view('menuadm/presensi', $data);
	}
	public function detailpresensi($id)
	{
		$data['presensi']=$this->M_presensi->getPresensiWhereId($id);
		$this->load->view('menuadm/presensi_detail', $data);
	}
	public function editpresensi($id)
	{
		$data['presensi']=$this->M_presensi->getPresensi($id);
		$this->load->view('menuadm/presensi_edit', $data);
	}
}
