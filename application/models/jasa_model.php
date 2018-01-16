<?php

/**
 * Created by PhpStorm.
 * User: Muhsin Ahadi
 * Date: 1/15/2018
 * Time: 10:16 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class jasa_model extends CI_Model
{
    var $table = 'jasa'; //mendefinisikan nama tabel


    public function __construct()//meload database
    {
        parent::__construct();
        $this->load->database();
    }


    public function get_all_jasa() //mengambil semua data company
    {
        $this->db->select("jasa.*, company.company, company.parent_company, company.business_consultant,
        company.assignment ");
        $this->db->from('jasa');
        $this->db->join('company', 'jasa.no_company = company.no_company');
        $query=$this->db->get();
        return $query->result();
    }


    public function get_by_id($no_jaringan) //mengambil data berdasarkan ID
    {
        $this->db->from($this->table);
        $this->db->where('no_jaringan',$no_jaringan);
        $query = $this->db->get();

        return $query->row();
    }

    public function jasa_add($data) //menambahkan data jasa
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }


    public function jasa_update($where, $data) //mengupdate data jasa
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

//    public function delete_by_id($barcode)
//    {
//        $this->db->where('barcode', $barcode);
//        $this->db->delete($this->table);
//    }

    public function search_data($company)
    {
        $this->db->like('company',$company);
        $query = $this->db->get('company');
        return $query->result();
    }

//    public function get_supplier()
//    {
//        $query=$this->db->query("select * from supplier");
//        if ($query->num_rows() > 0) {
//            foreach ($query->result() as $data) {
//                $datac[]=$data;
//            }
//            return $datac;
//        }
//    }
}