<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	/* start ngambil data dari tabel user */
	//ini buat akun petani
	public function getAccountPetani(){
		$this->db->where('role', 1);
		$this->db->from('user');
		return $this->db->get()->result_array();
	}
	//ini buat akun pengepul
	public function getAccountPengepul(){
		$this->db->where('role', 2);
		$this->db->from('user');
		return $this->db->get()->result_array();
	}
	//ini buat akun distributor
	public function getAccountDistributor(){
		$this->db->where('role', 3);
		$this->db->from('user');
		return $this->db->get()->result_array();
	}
	/*end ngambil data dari tabel user */

	/*start ambil data buat diedit*/
	public function getDetailUser($id){
		$this->db->where('id', $id);
		$this->db->from('user');
		$this->db->limit(1);
		return $this->db->get()->result_array();
	}
	/*end ambil data buat diedit */
	
	/*start untuk update dataUser */
	public function updateDetailUser($id, $data){
		$this->db->where('id', $id);
		$this->db->update('user', $data);
		return true;
	}
	/*end untuk update dataUser */

	/*start buat nambah dataUser */
	public function addUser($data){
		$this->db->insert('user', $data);
		return true;
	}
	/*end buat nambah dataUser */
	
	/*start buat hapus dataUser */
	public function deleteUser($id){
		$this->db->where('id',$id);
		$this->db->delete('user');
		return true;
	}
	/*end buat hapus dataUser */
}