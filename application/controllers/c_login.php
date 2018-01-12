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

			$this->session->set_userdata($data_session);
			echo
			"<script>
				alert('Successfully Login!');
				window.location.href = '" . base_url() . "admin/welcome';
			</script>";
			//$this->load->view('welcome');

		}else{
			echo
			"<script>
				alert('Login Failed!');
				window.location.href = '" . base_url() . "';
			</script>";
		}
	}
}
?>
