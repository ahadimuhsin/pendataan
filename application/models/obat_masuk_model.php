<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obat_masuk_model extends CI_Model
{

	var $table = 'obat_masuk';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


public function get_all_obat_masuk()
{
$this->db->from('obat_masuk');
$query=$this->db->get();
return $query->result();
}

public function get_all_obat()
{
$this->db->from('obat');
$query=$this->db->get();
return $query->result();
}

public function get_all_supplier()
{
$this->db->from('supplier');
$query=$this->db->get();
return $query->result();
}


	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function obat_masuk_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function obat_masuk_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	public function search_data($nama_obat)
	{
		$this->db->like('nama_obat',$nama_obat);
		$query = $this->db->get('obat_masuk');
		return $query->result();
	}

	public function get_supplier()
	{
		$query=$this->db->query("select * from supplier");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$datac[]=$data;
				}
				return $datac;
			}
	}

}
