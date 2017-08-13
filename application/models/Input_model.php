<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//ini buat data pupuk
	public function getPupuk(){
		$this->db->from('pupuk');
		return $this->db->get()->result_array();
	}

	//ini buat data benih
	public function getBenih(){
		$this->db->from('benih');
		return $this->db->get()->result_array();
	}

	public function getDetailBenih($id){
		$this->db->from('benih');
		$this->db->where('id_benih', $id);
		return $this->db->get()->result_array();
	}

	public function getDetailPupuk($id){
		$this->db->from('pupuk');
		$this->db->where('id_pupuk', $id);
		return $this->db->get()->result_array();
	}

	public function deletePupuk($id){
		$this->db->where('id_pupuk',$id);
		$this->db->delete('pupuk');
		return true;
	}

	public function deleteBenih($id){
		$this->db->where('id_benih',$id);
		$this->db->delete('benih');
		return true;
	}

	public function updateDetailBenih($id, $data){
		$this->db->where('id_benih', $id);
		$this->db->update('benih', $data);
		return true;
	}

	public function updateDetailPupuk($id, $data){
		$this->db->where('id_pupuk', $id);
		$this->db->update('pupuk', $data);
		return true;
	}

	/*start buat nambah dataPupuk */
	public function addPupuk($data){
		$this->db->insert('pupuk', $data);
		return true;
	}
	/*end buat nambah dataPupuk */

	/*start buat nambah databenih */
	public function addBenih($data){
		$this->db->insert('benih', $data);
		return true;
	}
	/*end buat nambah dataPupuk*/
}
