<?php

/**
 * Created by PhpStorm.
 * User: Muhsin Ahadi
 * Date: 1/9/2018
 * Time: 10:18 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class company_model extends CI_Model
{

    var $table = 'company';


    public function __construct()//meload database
    {
        parent::__construct();
        $this->load->database();
    }


    public function get_all_company() //mengambil semua data company
    {
        $this->db->from('company');
        $query=$this->db->get();
        return $query->result();
    }


    public function get_by_id($npwp) //mengambil data berdasarkan ID
    {
        $this->db->from($this->table);
        $this->db->where('no_company',$npwp);
        $query = $this->db->get();

        return $query->row();
    }

    public function company_add($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }


    public function company_update($where, $data)
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
