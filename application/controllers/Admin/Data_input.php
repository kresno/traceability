<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_input extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Input_model');
	}

	public function index(){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'inp');
		$data["data_benih"] = $this->Input_model->getBenih();
		$data["data_pupuk"] = $this->Input_model->getPupuk();
		
		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar', $data);
		$this->load->view('admin/content_input', $data);
		$this->load->view('layout/footer');
	}

	/* ini buat load page dan data -> case edit Benih*/
	public function editInputPupuk($id){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'inp');
		$data["data"] = $this->Input_model->getDetailPupuk($id);
		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar',$data);
		$this->load->view('admin/content_editInputPupuk', $data);
		$this->load->view('layout/footer');
	}

	// ini buat load page and simpan update data -> case update data
	public function updateDataPupuk($id){
		$data['nama_pupuk'] = $this->input->post('nama_pupuk');
		$hasil = $this->Input_model->updateDetailPupuk($id, $data);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil update data pupuk'); window.location.href='..'</script>";
		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}

	public function deletePupuk($id){
		$hasil = $this->Input_model->deletePupuk($id);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil menghapus pupuk'); window.location.href='..'</script>";

		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}

	/* buat nampilin form tambah user */
	public function addPupuk(){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'inp');

		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar',$data);
		$this->load->view('admin/content_addPupuk');
		$this->load->view('layout/footer');
	}

	// ini buat proses tambah user
	public function proses_addPupuk(){
		$data['nama_pupuk'] = $this->input->post('nama_pupuk');
		$hasil = $this->Input_model->addPupuk($data);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil menambahkan pupuk'); window.location.href='../data_input'</script>";
		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}

	/* ini buat load page dan data -> case edit Benih */
	public function editInputBenih($id){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'inp');
		$data["data"] = $this->Input_model->getDetailBenih($id);
		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar',$data);
		$this->load->view('admin/content_editInputBenih', $data);
		$this->load->view('layout/footer');
	}

	// ini buat load page and simpan update data -> case update data
	public function updateDataBenih($id){
		$data['nama_benih'] = $this->input->post('nama_benih');
		$hasil = $this->Input_model->updateDetailBenih($id, $data);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil update data benih'); window.location.href='..'</script>";
		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}

	//ini buat hapus data pupuk
	public function deleteBenih($id){
		$hasil = $this->Input_model->deleteBenih($id);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil menghapus benih'); window.location.href='..'</script>";

		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}

	/* buat nampilin form tambah benih */
	public function addBenih(){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'inp');

		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('admin/layout/sidebar',$data);
		$this->load->view('admin/content_addBenih');
		$this->load->view('layout/footer');
	}

	// ini buat proses tambah benih
	public function proses_addBenih(){
		$data['nama_benih'] = $this->input->post('nama_benih');
		$hasil = $this->Input_model->addBenih($data);
		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil menambahkan benih'); window.location.href='../data_input'</script>";
		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}
}