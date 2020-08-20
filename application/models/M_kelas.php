<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function listKelas()
	{
		$query=$this->db->query("SELECT * FROM kelas");
		return $query->result();
	}

	public function getRapotWhereId($where)
	{
		$query=$this->db->query("SELECT * FROM rapot WHERE nisn='$where'");
		if($query->num_rows()>0){
			foreach ($query->result() as $value) {
				$data=array(
					'nisn' => $value->nisn,
					'kode_mp' => $value->kode_mp,
					'kode_semester' => $value->kode_semester,
					'kode_ta' => $value->kode_ta,
					'nilai' => $value->nilai 
				);
			}
		}
		return $data;
	}

	public function getSemWhereId($where)
	{
		$query=$this->db->query("SELECT * FROM kelas WHERE kode='$where'");
		if($query->num_rows()>0){
			foreach ($query->result() as $value) {
				$data=array(
					'kode' => $value->kode,
					'nama' => $value->nama,
					'kode_jurusan' => $value->kode_jurusan,
					'nip_wali' => $value->nip_wali,
				);
			}
		}
		return $data;
	}

	public function insert($data)
	{
		$this->db->insert('kelas', $data);
	}

	public function update($data, $where){
		$this->db->set($data);
		$this->db->where("kode", $where);
		$this->db->update('kelas', $data);

	}

	public function delete($where){
		$this->db->query("DELETE FROM kelas where kode='$where'");
	}
}
?>