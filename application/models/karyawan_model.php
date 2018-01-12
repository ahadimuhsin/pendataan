<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_model extends CI_Model
{

	var $table = 'karyawan';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


public function get_all_karyawan()
{
$this->db->from('karyawan');
$query=$this->db->get();
return $query->result();
}


	public function get_by_id($nik)
	{
		$this->db->from($this->table);
		$this->db->where('nik',$nik);
		$query = $this->db->get();

		return $query->row();
	}

	public function karyawan_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function karyawan_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($nik)
	{
		$this->db->where('nik', $nik);
		$this->db->delete($this->table);
	}

	public function search_data($nik)
	{
		$this->db->like('nik',$nik);
		$query = $this->db->get('karyawan');
		return $query->result();
	}

}
