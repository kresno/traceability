<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QRCodePetani_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function addDataInput($data){
		$this->db->insert('data_qrcode_petani', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function addQRCode($data){
		$this->db->insert('qrcode_petani', $data);
		return true;
	}

	public function getDataQRCode($id){
		$this->db->select('*');
        $this->db->from('data_qrcode_petani');
        $this->db->where('id_petani', $id);
        $query = $this->db->get();
        return $query->result_array();
	}

	public function getDetailQRCode($id){
		$this->db->select('*');
        $this->db->from('data_qrcode_petani');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();
	}
}