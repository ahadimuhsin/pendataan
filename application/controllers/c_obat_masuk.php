<?php
class c_obat_masuk extends CI_Controller{

	public function __construct()
	 {
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('obat_masuk_model');
	 }


 public function obat_masuk_add()
	 {
     $data = array(
				 'nama_obat' => $this->input->post('nama_obat'),
				 'tanggal_masuk' => $this->input->post('tanggal_masuk'),
				 'jumlah' => $this->input->post('jumlah'),
 				 'nama_supplier' => $this->input->post('nama_supplier'),
				 'tanggal_kadaluarsa' => $this->input->post('tanggal_kadaluarsa'),
			 );
		 /*$data['namaSup']=$this->obat_masuk_model->get_supplier();
		 $data['id']=$id;*/
		 $insert = $this->obat_masuk_model->obat_masuk_add($data);
		 echo json_encode(array("status" => TRUE));
	 }
	 public function ajax_edit($id)
	 {
		 $data = $this->obat_masuk_model->get_by_id($id);



		 echo json_encode($data);
	 }

	 public function obat_masuk_update()
 {
	 {
     $data = array(
				 'nama_obat' => $this->input->post('nama_obat'),
				 'tanggal_masuk' => $this->input->post('tanggal_masuk'),
				 'jumlah' => $this->input->post('jumlah'),
 				 'nama_supplier' => $this->input->post('nama_supplier'),
				 'tanggal_kadaluarsa' => $this->input->post('tanggal_kadaluarsa'),
			 );
	 $this->obat_masuk_model->obat_masuk_update(array('id' => $this->input->post('id')), $data);
	 echo json_encode(array("status" => TRUE));
 }}

 public function obat_masuk_delete($id)
 {
	 $this->obat_masuk_model->delete_by_id($id);
	 echo json_encode(array("status" => TRUE));
 }


}
