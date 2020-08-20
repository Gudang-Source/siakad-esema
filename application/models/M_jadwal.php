<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function listJadwal()
	{
		$this->db->select('jadwal.*, mapel.nama as nm, kelas.nama as nam, guru.nama as nmg, guru.nip as nip');
        $this->db->from('jadwal');
        $this->db->join('kelas','jadwal.kode_kelas=kelas.kode');
        $this->db->join('mapel','jadwal.kode_mp=mapel.kode');
        $this->db->join('guru','guru.kode_mp=mapel.kode');
        $query = $this->db->get();
        return $query->result();
	}

	public function getJadwalWhereId($where)
	{
		$this->db->select('jadwal.*, mapel.nama as mapel, semester.nama as semester, tahun_ajaran.nama as ta, kelas.nama as kelas');
        $this->db->from('jadwal');
        $this->db->join('mapel','jadwal.kode_mp=mapel.kode');
        $this->db->join('semester','jadwal.kode_semester=semester.kode');
        $this->db->join('tahun_ajaran','jadwal.kode_ta=tahun_ajaran.kode');
        $this->db->join('kelas','jadwal.kode_kelas=kelas.kode');
        $this->db->where('jadwal.kode_kelas', $where);
        $query = $this->db->get();
        return $query->result();
	}

	public function getJdw($idkls, $idmp)
	{
		$this->db->select('jadwal.*');
        $this->db->from('jadwal');
        $this->db->where('jadwal.kode_kelas', $idkls);
        $this->db->where('jadwal.kode_mp', $idmp);
        $query = $this->db->get();
		if($query->num_rows()>0){
			foreach ($query->result() as $value) {
				$data=array(
					'kode_mp' => $value->kode_mp,
					'kode_kelas' => $value->kode_kelas,
					'kode_semester' => $value->kode_semester,
					'kode_ta' => $value->kode_ta,
					'hari' => $value->hari,
					'waktu' => $value->waktu
				);
			}
		}
		return $data;
	}

	public function getJdwSisWhereId($nisn)
	{
		$this->db->select('jadwal.*, mapel.nama as mapel, semester.nama as semester, tahun_ajaran.nama as ta, kelas.nama as kelas');
        $this->db->from('jadwal');
        $this->db->join('murid','jadwal.kode_kelas=murid.kode_kelas');
        $this->db->join('mapel','jadwal.kode_mp=mapel.kode');
        $this->db->join('semester','jadwal.kode_semester=semester.kode');
        $this->db->join('tahun_ajaran','jadwal.kode_ta=tahun_ajaran.kode');
        $this->db->join('kelas','jadwal.kode_kelas=kelas.kode');
        $this->db->where('murid.nisn', $nisn);
        $query = $this->db->get();
        return $query->result();
	}

	public function insert($data)
	{
		$this->db->insert('jadwal', $data);
	}

	public function delete($idkls, $idmp){
		$this->db->query("DELETE FROM jadwal where kode_mp='$idmp' AND kode_kelas='$idkls'");
	}

	public function update($data, $idkls, $idmp){
		$this->db->set($data);
		$this->db->where('kode_kelas', $idkls);
		$this->db->where('kode_mp', $idmp);
		$this->db->update('jadwal', $data);
	}
}
?>