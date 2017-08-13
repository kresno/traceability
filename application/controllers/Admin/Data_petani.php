<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_petani extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'pet');
		$data["data"] = $this->User_model->getAccountPetani();

		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar',$data);
		$this->load->view('admin/content_petani', $data);
		$this->load->view('layout/footer');
	}

	/* buat nampilin form tambah user */
	public function addUser(){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'pet');

		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar',$data);
		$this->load->view('admin/content_addUser');
		$this->load->view('layout/footer');
	}

	// ini buat proses tambah user
	public function proses_addUser(){
		$data['nama'] = $this->input->post('nama');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['role'] = $this->input->post('role');
		$hasil = $this->User_model->addUser($data);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil menambahkan pengguna'); window.location.href='../data_petani'</script>";
		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}

	/* ini buat load page dan data -> case edit */
	public function editData($id){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'pet');
		$data["data"] = $this->User_model->getDetailUser($id);
		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar',$data);
		$this->load->view('admin/content_editDataUser');
		$this->load->view('layout/footer');
	}

	// ini buat load page and simpan update data -> case update data
	public function updateDataUser($id){
		$data['nama'] = $this->input->post('nama');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$hasil = $this->User_model->updateDetailUser($id, $data);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil updatedata'); window.location.href='..'</script>";

		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}

	//ini buat hapus data user
	public function deleteUser($id){
		$hasil = $this->User_model->deleteUser($id);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil updatedata'); window.location.href='..'</script>";

		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}
}