<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index(){
		$data = array('title' => "Login");
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('login');
	}

	public function login_proses(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = $this->Login_model->getAccount($email, $password);
		foreach ($data as $row){
			$nama = $row["nama"];
			$role = $row["role"];
			$id =$row['id'];
		}
		$sess_data = array('nama' => $nama, 'role' => $role, 'id' => $id);
		$this->session->set_userdata($sess_data);
		switch ($sess_data['role']) {
			case '1':
				redirect('petani/dashboard');
				break;
			case '2':
				redirect('pengepul/dashboard');
				break;
			case '3':
				redirect('distributor/dashboard');
				break;
			case '4':
				redirect('admin/dashboard');
				break;		
			default:
				redirect();
				break;
		}
 	}

 	public function logout_proses(){
 		$this->session->sess_destroy();
 		redirect('welcome');
 	}
}
