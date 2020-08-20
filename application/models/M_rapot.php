<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rapot extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function listRapot()
	{
		$this->db->select('rapot.*, murid.nama as nm, kelas.nama as nam');
        $this->db->from('rapot');
        $this->db->join('murid','rapot.nisn=murid.nisn');
        $this->db->join('kelas','murid.kode_kelas=kelas.kode');
        $query = $this->db->get();
        return $query->result();
	}

	public function getRapotWhereId($where)
	{
		$this->db->select('rapot.*, mapel.nama as na, semester.nama as nam, tahun_ajaran.nama as nm');
        $this->db->from('rapot');
        $this->db->join('mapel','rapot.kode_mp=mapel.kode');
        $this->db->join('semester','rapot.kode_semester=semester.kode');
        $this->db->join('tahun_ajaran','rapot.kode_ta=tahun_ajaran.kode');
        $this->db->where('rapot.nisn', $where);
        $query = $this->db->get();
        return $query->result();
	}

	public function getSis($nisn, $idmp)
	{
		$this->db->select('rapot.*, mapel.nama as na, semester.nama as nam, tahun_ajaran.nama as nm');
        $this->db->from('rapot');
        $this->db->join('mapel','rapot.kode_mp=mapel.kode');
        $this->db->join('semester','rapot.kode_semester=semester.kode');
        $this->db->join('tahun_ajaran','rapot.kode_ta=tahun_ajaran.kode');
        $this->db->where('rapot.nisn', $nisn);
        $this->db->where('rapot.kode_mp', $idmp);
        $query = $this->db->get();
		if($query->num_rows()>0){
			foreach ($query->result() as $value) {
				$data=array(
					'nisn' => $value->nisn,
					'na' => $value->na,
					'nam' => $value->nam,
					'nm' => $value->nm,
					'kode_mp' => $value->kode_mp,
					'kode_semester' => $value->kode_semester,
					'kode_ta' => $value->kode_ta,
					'nilai' => $value->nilai
				);
			}
		}
		return $data;
	}

	public function insert($data)
	{
		$this->db->insert('khs', $data);
	}

	public function delete($where){
		$this->db->query("DELETE FROM rapot where kode_mp='$where'");
	}

	public function update($data, $nisn, $idmp){
		$this->db->set($data);
		$this->db->where('nisn', $nisn);
		$this->db->where('kode_mp', $idmp);
		$this->db->update('rapot', $data);
	}
}
?>