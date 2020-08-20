<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_presensi extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function listPresensi()
	{
		$this->db->select('presensi.*, mapel.nama as mapel, semester.nama as semester, tahun_ajaran.nama as ta, murid.nama as murid, guru.nama as guru, kelas.nama as kelas');
        $this->db->from('presensi');
        $this->db->join('mapel','presensi.kode_mp=mapel.kode');
        $this->db->join('semester','presensi.kode_semester=semester.kode');
        $this->db->join('tahun_ajaran','presensi.kode_ta=tahun_ajaran.kode');
        $this->db->join('murid','presensi.nisn=murid.nisn');
        $this->db->join('kelas','murid.kode_kelas=kelas.kode');
        $this->db->join('guru','guru.kode_mp=mapel.kode');
        $query = $this->db->get();
        return $query->result();
	}

	public function getPresensiWhereId($where)
	{
		$this->db->select('presensi.*, mapel.nama as mapel, semester.nama as semester, tahun_ajaran.nama as ta, kelas.nama as kelas');
        $this->db->from('presensi');
        $this->db->join('mapel','presensi.kode_mp=mapel.kode');
        $this->db->join('semester','presensi.kode_semester=semester.kode');
        $this->db->join('tahun_ajaran','presensi.kode_ta=tahun_ajaran.kode');
        $this->db->join('murid','presensi.nisn=murid.nisn');
        $this->db->join('kelas','murid.kode_kelas=kelas.kode');
        $this->db->where('presensi.nisn', $where);
        $query = $this->db->get();
        return $query->result();
	}

	public function getPresensi($id)
	{
		$this->db->select('presensi.*');
        $this->db->from('presensi');
        $this->db->where('presensi.kode', $id);
        $query = $this->db->get();
		if($query->num_rows()>0){
			foreach ($query->result() as $value) {
				$data=array(
					'kode' => $value->kode,
					'kode_mp' => $value->kode_mp,
					'pertemuan' => $value->pertemuan,
					'tanggal' => $value->tanggal,
					'alpha' => $value->alpha,
					'ijin' => $value->ijin,
					'sakit' => $value->sakit,
					'kode_semester' => $value->kode_semester,
					'kode_ta' => $value->kode_ta,
					'nisn' => $value->nisn
				);
			}
		}
		return $data;
	}


	public function insert($data)
	{
		$this->db->insert('presensi', $data);
	}

	public function delete($id){
		$this->db->query("DELETE FROM presensi where kode='$id'");
	}

	public function update($data, $id){
		$this->db->set($data);
		$this->db->where('kode', $id);
		$this->db->update('presensi', $data);
	}
}
?>