<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('QRCodePetani_model');
	}

	public function index(){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Distributor", 'nama' => $this->session->userdata('nama'), 'state'=> 'dash');
		$data["data"] = $this->QRCodePetani_model->getDataQRCode($this->session->userdata('id'));
		
		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('pengepul/layout/sidebar', $data);
		$this->load->view('pengepul/content', $data);
		$this->load->view('layout/footer');
	}

}