<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('QRCodePetani_model');
	}

	public function index(){
		$data = array('title' => "Login");
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('login');
	}

	public function petani($id){
		$data = array('role' => $this->session->userdata('role'), 
			'title' => "Traceability", 
			'nama' => "test");
		$data["data"] = $this->QRCodePetani_model->getDetailQRCode($id);

		$this->load->view('layout/header_view');
		$this->load->view('layout/navbar_view');
		$this->load->view('content_view', $data);
	}

}