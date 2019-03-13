<?php
class Login extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		// Load class Model_admin
		$this->load->model("Model_admin");
		//mengaktifkan sessiom
		//$this->load->library('session');
	}

	//untuk menampilkan halaman Login
	 public function index() {
	 	$data['judul']="Login Komunitas";
	 	$this->load->view('view_login',$data);

	 }

	 public function cek() {
	 	$username=$this->input->post('username',true);
	 	$password=$this->input->post('password',true);
	 	//mengirim ke model admin
	 	$cek=$this->Model_admin->cek_login($username,$password);
	 	if($cek == TRUE) {

	 		//menambahkan user ke variabel session
	 		$data=array('username'=>$username, 'logged_in'=>TRUE);
			$this->session->set_userdata($data);
	 		redirect('pengurus');  //jika user dan pass ada ke halaman CRUD pengurus
	 	} else {
	 		redirect('login','refresh'); //jika tidak ada kembali ke login
	 	}
	 }

	 //fungsi function logout
	 public function logout()	 {
	 	$this->session->unset_userdata('username'); //hapus username dari session
	 	$this->session->unset_userdata('logged_in'); //hapus logged in dari session
	 	redirect('login'); //kembali ke login
	 } 

	 }

	 ?>