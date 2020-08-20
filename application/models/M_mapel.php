<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function listMapel()
	{
		$query=$this->db->query("SELECT * FROM mapel");
		return $query->result();
	}

	public function getMapWhereId($where)
	{
		$query=$this->db->query("SELECT * FROM mapel WHERE kode='$where'");
		if($query->num_rows()>0){
			foreach ($query->result() as $value) {
				$data=array(
					'kode' => $value->kode,
					'nama' => $value->nama,
					'kode_jurusan' => $value->kode_jurusan
				);
			}
		}
		return $data;
	}

	public function insert($data)
	{
		$this->db->insert('mapel', $data);
	}

	public function update($data, $where){
		$this->db->set($data);
		$this->db->where("kode", $where);
		$this->db->update('mapel', $data);
	}

	public function delete($where){
		$this->db->query("DELETE FROM mapel where kode='$where'");
	}
}
?>
