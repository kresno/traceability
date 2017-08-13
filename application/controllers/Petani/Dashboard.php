<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('QRCodePetani_model');
	}

	public function index(){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'dis');
		$data["data"] = $this->QRCodePetani_model->getDataQRCode($this->session->userdata('id'));
		
		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('petani/layout/sidebar', $data);
		$this->load->view('petani/content', $data);
		$this->load->view('layout/footer');
	}

	public function proses_createQRcode($id_last_insert){
		$this->load->library('ciqrcode');

		$link = "http://localhost/traceability/index.php/view/petani/".$id_last_insert;
		$gambar = "petani-".date('y-m-d').'-'.$id_last_insert.".png";

		$data["id_petani"] = $this->session->userdata('id');
		$data["id_data"] = $id_last_insert;
		$data["link"] = $link;
		$data["gambar"] = $gambar;
		$this->QRCodePetani_model->addQRCode($data);

		$params['data'] = "http://localhost/traceability/index.php/view/petani/".$id_last_insert;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.'public/images/qrcodepetani/'.$gambar.".png";
		$hasil = $this->ciqrcode->generate($params);

		if($hasil){
			echo "<script type='text/javascript'>alert('Berhasil menambahkan pengguna'); window.location.href='../dashboard/lihatQRCode'</script>";
		}
		else
			echo "<script type='text/javascript'>history.go(-1);</script>";
	}

	public function proses_inputDataQRcode(){
		$data["id_petani"] = $this->input->post("id_petani");
		$data["luas_lahan"] = $this->input->post("luas_lahan");
		$data["id_benih"] = $this->input->post("id_benih");
		$data["id_pupuk"] = $this->input->post("id_pupuk");
		$data["pestisida"] = $this->input->post("pestisida");
		$data["umur_tanam"] = $this->input->post("umur_tanam");
		$data["hasil_tanam"] = $this->input->post("hasil_tanam");
		$data["id_petani"] = $this->input->post("id_petani");
		$data["kadar_air"] = $this->input->post("kadar_air");

		$id_last_insert = $this->QRCodePetani_model->addDataInput($data);
		$this->proses_createQRcode($id_last_insert);
	}

	public function inputDataQRcode(){
		$data = array('role' => $this->session->userdata('role'), 
			'title' => "Traceability", 
			'nama' => $this->session->userdata('nama'), 
			'state'=> 'qr');
		$data["data_benih"] = $this->Input_model->getBenih();
		$data["data_pupuk"] = $this->Input_model->getPupuk();

		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('petani/layout/sidebar', $data);
		$this->load->view('petani/content_inputdata', $data);
		$this->load->view('layout/footer');
	}

	public function lihatQRCode(){
		$data = array('role' => $this->session->userdata('role'), 'title' => "Dashboard Admin", 'nama' => $this->session->userdata('nama'), 'state'=> 'dis');
		$data["data"] = $this->QRCodePetani_model->getDataQRCode($this->session->userdata('id'));

		$this->load->view('layout/header_after_login', $data);
		$this->load->view('layout/navbar_after_login', $data);
		$this->load->view('petani/layout/sidebar', $data);
		$this->load->view('petani/content_lihatqrcode', $data);
		$this->load->view('layout/footer');
	}
}