<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function listGuru()
	{
		$query=$this->db->query("SELECT * FROM guru");
		return $query->result();
	}

	public function getGurWhereId($where)
	{
		$query=$this->db->query("SELECT * FROM guru WHERE nip='$where'");
		if($query->num_rows()>0){
			foreach ($query->result() as $value) {
				$data=array(
					'nip' => $value->nip,
					'nama' => $value->nama,
					'jk' => $value->jk,
					'alamat' => $value->alamat,
					'foto' => $value->foto,
					'kode_jurusan' => $value->kode_jurusan,
					'kode_mp' => $value->kode_mp
					
				);
			}
		}
		return $data;
	}

	public function insert($data)
	{
		$this->db->insert('guru', $data);
	}

	public function update($data, $where){
		$this->db->set($data);
		$this->db->where("nip", $where);
		$this->db->update('guru', $data);
	}

	public function delete($where){
		$this->db->query("DELETE FROM guru where nip='$where'");
	}
}
?>
