<?php
class c_obat extends CI_Controller{

	public function __construct()
	 {
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('obat_model');
	 }


 public function obat_add()
	 {
		 $data = array(
				 'barcode' => $this->input->post('barcode'),
				 'nama_obat' => $this->input->post('nama_obat'),
				 'kategori' => $this->input->post('kategori'),
				 'stok' => $this->input->post('stok'),
				 'nama_supplier' => $this->input->post('nama_supplier'),
				 'tanggal_kadaluarsa' => $this->input->post('tanggal_kadaluarsa'),
			 );
		 /*$data['namaSup']=$this->obat_model->get_supplier();
		 $data['id']=$id;*/
		 $insert = $this->obat_model->obat_add($data);
		 echo json_encode(array("status" => TRUE));
	 }
	 public function ajax_edit($barcode)
	 {
		 $data = $this->obat_model->get_by_id($barcode);



		 echo json_encode($data);
	 }

	 public function obat_update()
 {
	 {
		 $data = array(
				 'nama_obat' => $this->input->post('nama_obat'),
				 'kategori' => $this->input->post('kategori'),
				 'stok' => $this->input->post('stok'),
				 'nama_supplier' => $this->input->post('nama_supplier'),
 				 'tanggal_kadaluarsa' => $this->input->post('tanggal_kadaluarsa'),
			 );
	 $this->obat_model->obat_update(array('id' => $this->input->post('id')), $data);
	 echo json_encode(array("status" => TRUE));
 }}

 public function obat_delete($barcode)
 {
	 $this->obat_model->delete_by_id($barcode);
	 echo json_encode(array("status" => TRUE));
 }


}
