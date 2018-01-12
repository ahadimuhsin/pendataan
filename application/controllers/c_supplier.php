<?php
class c_supplier extends CI_Controller{

	public function __construct()
	 {
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('supplier_model');
	 }


 public function supplier_add()
	 {
		 $data = array(
				 'nama' => $this->input->post('nama'),
				 'kontak' => $this->input->post('kontak'),
				 'alamat' => $this->input->post('alamat'),
			 );
		 $insert = $this->supplier_model->supplier_add($data);
		 echo json_encode(array("status" => TRUE));
	 }
	 public function ajax_edit($id)
	 {
		 $data = $this->supplier_model->get_by_id($id);



		 echo json_encode($data);
	 }

	 public function supplier_update()
 {
	 {
     $data = array(
				 'nama' => $this->input->post('nama'),
				 'kontak' => $this->input->post('kontak'),
				 'alamat' => $this->input->post('alamat'),
			 );
	 $this->supplier_model->supplier_update(array('id' => $this->input->post('id')), $data);
	 echo json_encode(array("status" => TRUE));
 }}

 public function supplier_delete($id)
 {
	 $this->supplier_model->delete_by_id($id);
	 echo json_encode(array("status" => TRUE));
 }



}
