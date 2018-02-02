
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();

//memanggil helper yang akan digunakan
		$this->load->helper('url');
		$this->load->model('company_model');
        $this->load->model('jasa_model');
        $this->load->helper('file');
        $this->load->helper('download');

//memeriksa status login admin
		//kalau statusnya belum login, muncul peringatan
		if($this->session->userdata('status') != "login"){
			echo
			"<script>
				alert('You Are Not Logged In or Your Session Already Expired!');
				window.location.href = '" . base_url() . "';
			</script>";
		}
	}
//menampilkan halaman index
	function welcome(){
		$this->load->view('index');
	}
//untuk menampilkan halaman company beserta datanya
	function company ()
	{

        $data['company']=$this->company_model->get_all_company();
        $this->load->view('admin/company',$data);
	}
//untuk menampilkan halaman jasa beserta datanya
	function jasa ()
	{
        $data['jasa']=$this->jasa_model->get_all_jasa();
        $this->load->view('admin/jasa',$data);
	}
//untuk mendownload file log
	function download_log($fileName=NULL)
	{
		$fileName = "log.txt";
        if ($fileName) {
            $file = realpath ( "log/" ) . "\\" . $fileName;
            // check file exists
            if (file_exists ( $file )) {
                // get file content
                $data = file_get_contents ( $file );
                //force download
                force_download ( $fileName, $data );
            } else {
                // Redirect to base url
                redirect ( base_url () );
            }
        }
	}

//untuk logout
	function logout()
	{
	$this->session->sess_destroy();

//untuk log file
	date_default_timezone_set('Asia/Bangkok'); //mengatur zona waktu
        $date = new DateTime();
        $date = $date->format("d:m:y H:i:s");
        $file = 'log/log.txt';
        $message = $date. " " .$_SESSION['username']." telah logout".PHP_EOL;
        file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
        //sampai sini log file
	echo
	"<script>
//		alert('Anda Telah Logout!');
		window.location.href = '" . base_url() . "';
	</script>";
	}
}
?>
