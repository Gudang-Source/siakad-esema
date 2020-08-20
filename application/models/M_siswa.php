<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function listSiswa()
	{
		$this->db->select('murid.*, kelas.nama as nam');
        $this->db->from('murid');
        $this->db->join('kelas','murid.kode_kelas=kelas.kode');
        $query = $this->db->get();
        return $query->result();
	}

	public function wherKls($kode)
	{
		$this->db->select('murid.*, kelas.nama as nam');
        $this->db->from('murid');
        $this->db->join('kelas','murid.kode_kelas=kelas.kode');
        $this->db->where('kelas.kode', $kode);
        $query = $this->db->get();
        return $query->result();
	}

	public function listSiswaWhrGur($kode)
	{
		$this->db->select('murid.*, kelas.nama as na, guru.nama as nam');
        $this->db->from('murid');
        $this->db->join('kelas','murid.kode_kelas=kelas.kode');
        $this->db->join('guru','guru.nip=kelas.nip_wali');
        $this->db->where('guru.nip', $kode);
        $query = $this->db->get();
        return $query->result();
	}

	public function getSemWhereId($where)
	{
		$query=$this->db->query("SELECT * FROM murid WHERE nisn='$where'");
		if($query->num_rows()>0){
			foreach ($query->result() as $value) {
				$data=array(
					'nisn' => $value->nisn,
					'nama' => $value->nama,
					'jk' => $value->jk,
					'alamat' => $value->alamat,
					'foto' => $value->foto,
					'kode_kelas' => $value->kode_kelas,					
				);
			}
		}
		return $data;
	}

	public function insert($data)
	{
		$this->db->insert('murid', $data);
	}

	public function update($data, $where){
		$this->db->set($data);
		$this->db->where("nisn", $where);
		$this->db->update('murid', $data);

	}

	public function delete($where){
		$this->db->query("DELETE FROM kelas where nisn='$where'");
	}
}
?>