<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obat_model extends CI_Model
{

	var $table = 'obat';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


public function get_all_obat()
{
$this->db->from('obat');
$query=$this->db->get();
return $query->result();
}


	public function get_by_id($barcode)
	{
		$this->db->from($this->table);
		$this->db->where('barcode',$barcode);
		$query = $this->db->get();

		return $query->row();
	}

	public function obat_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function obat_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($barcode)
	{
		$this->db->where('barcode', $barcode);
		$this->db->delete($this->table);
	}

	public function search_data($nama_obat)
	{
		$this->db->like('nama_obat',$nama_obat);
		$query = $this->db->get('obat');
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
