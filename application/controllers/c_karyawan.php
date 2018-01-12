<?php
class c_karyawan extends CI_Controller{

	public function __construct()
	 {
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('karyawan_model');
	 }


 public function karyawan_add()
	 {
		 $data = array(
          'nik' => $this->input->post('nik'),
				 'nama' => $this->input->post('nama'),
				 'kontak' => $this->input->post('kontak'),
				 'alamat' => $this->input->post('alamat'),
			 );
		 $insert = $this->karyawan_model->karyawan_add($data);
		 echo json_encode(array("status" => TRUE));
	 }
	 public function ajax_edit($nik)
	 {
		 $data = $this->karyawan_model->get_by_id($nik);



		 echo json_encode($data);
	 }

	 public function karyawan_update()
 {
	 {
     $data = array(
				 'nama' => $this->input->post('nama'),
				 'kontak' => $this->input->post('kontak'),
				 'alamat' => $this->input->post('alamat'),
			 );
	 $this->karyawan_model->karyawan_update(array('id' => $this->input->post('id')), $data);
	 echo json_encode(array("status" => TRUE));
 }}

 public function karyawan_delete($nik)
 {
	 $this->karyawan_model->delete_by_id($nik);
	 echo json_encode(array("status" => TRUE));
 }



}
