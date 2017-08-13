<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index(){
		$data = array('role' => $this->session->userdata('role'), 
			'title' => "Traceability", 
			'nama' => $this->session->userdata('nama'), 
			'state'=> 'dash');
		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar', $data);
		$this->load->view('admin/content');
		$this->load->view('layout/footer');
	}

	
}