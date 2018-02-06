<?php
class c_login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
        $this->load->library('session');

	}

	public function index(){
		$this->load->view('v_login');
	}

	public function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->login_model->cek_login1("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'status' => "login"
				);

			//untuk log file
            date_default_timezone_set('Asia/Bangkok');
            $date = new DateTime();
			$date = $date->format("d:m:y H:i:s");
		$file = 'log/log.txt';
		$message = $date. " " .$username." telah login".PHP_EOL;
		file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
		//sampe sini log file

            $this->session->set_userdata($data_session);
			echo
			"<script>
//				alert('Anda Telah Login!');
				window.location.href = '" . base_url() . "admin/home';
			</script>";
//			$this->load->view('index');

		}else{
			echo
			"<script>
				alert('Username atau Password salah!');
				window.location.href = '" . base_url() . "';
			</script>";
		}
	}
}
?>
