
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('obat_model');
		$this->load->model('karyawan_model');
		$this->load->model('supplier_model');
		$this->load->model('obat_masuk_model');
		$this->load->helper('url');
		$this->load->model('company_model');
        $this->load->model('jasa_model');

		if($this->session->userdata('status') != "login"){
			echo
			"<script>
				alert('You Must Logged As Admin First!');
				window.location.href = '" . base_url() . "';
			</script>";
		}
	}

	function welcome(){
		$this->load->view('index');
	}

//	function karyawan(){
//		$data['karyawan']=$this->karyawan_model->get_all_karyawan();
//	  $this->load->view('karyawan',$data);	}
//
//	function supplier()
//	{
//		$data['supplier']=$this->supplier_model->get_all_supplier();
//		$this->load->view('supplier',$data);
//	}
//
//	function obat()
//	{
//		$data['obat']=$this->obat_model->get_all_obat();
//		$data['supplier']=$this->supplier_model->get_all_supplier();
//		$this->load->view('obat',$data);
//
//	}

	function company ()
	{

        $data['company']=$this->company_model->get_all_company();
        //$data['supplier']=$this->supplier_model->get_all_supplier();
        $this->load->view('admin/company',$data);
	}

	function jasa ()
	{
        $data['jasa']=$this->jasa_model->get_all_jasa();
        //$data['supplier']=$this->supplier_model->get_all_supplier();
        $this->load->view('admin/jasa',$data);
	}


//	function obat_masuk()
//	{
//		$data['obat_masuk']=$this->obat_masuk_model->get_all_obat_masuk();
//		$data['obat']=$this->obat_model->get_all_obat();
//		$data['supplier']=$this->supplier_model->get_all_supplier();
//		$this->load->view('obat_masuk',$data);
//	}
//
//	public function searchDataobat()
//  {
// 	 $nama_obat = $this->input->post('nama_obat');
// 	 if(isset($nama_obat) && !empty($nama_obat)){
// 		 $data['obat'] = $this->obat_model->search_data($nama_obat);
// 		 $this->load->view('obat',$data);
// 	 }else{
// 		 echo
// 		 "<script>
// 			 alert('Data Not Found!');
// 			 window.location.href = '" . base_url() . "admin/obat';
// 		 </script>";
// 	 }
//  }
//
//	public function searchDataobat_masuk()
//  {
// 	 $nama_obat = $this->input->post('nama_obat');
// 	 if(isset($nama_obat) && !empty($nama_obat)){
// 		 $data['obat_masuk'] = $this->obat_masuk_model->search_data($nama_obat);
// 		 $this->load->view('obat_masuk',$data);
// 	 }else{
// 		 echo
// 		 "<script>
// 			 alert('Data Not Found!');
// 			 window.location.href = '" . base_url() . "admin/obat_masuk';
// 		 </script>";
// 	 }
//  }
//
//	public function searchDataSupplier()
//  {
// 	 $nama = $this->input->post('nama');
// 	 if(isset($nama) && !empty($nama)){
// 		 $data['supplier'] = $this->supplier_model->search_data($nama);
// 		 $this->load->view('supplier',$data);
// 	 }else{
// 		 echo
// 		 "<script>
// 			 alert('Data Not Found!');
// 			 window.location.href = '" . base_url() . "admin/supplier';
// 		 </script>";
// 	 }
//  }
//
//	public function searchDataKaryawan()
//  {
// 	 $nik = $this->input->post('nik');
// 	 if(isset($nik) && !empty($nik)){
// 		 $data['karyawan'] = $this->karyawan_model->search_data($nik);
// 		 $this->load->view('karyawan',$data);
// 	 }else{
// 		 echo
// 		 "<script>
// 			 alert('Data Not Found!');
// 			 window.location.href = '" . base_url() . "admin/karyawan';
// 		 </script>";
// 	 }
//  }

	function logout()
	{
	$this->session->sess_destroy();
	echo
	"<script>
		alert('Successfully Logout!');
		window.location.href = '" . base_url() . "';
	</script>";
	}
}
?>
