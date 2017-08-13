<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAccount($email, $password){
		$data =  array('email' => $email, 
			'password' => $password );
		$this->db->where($data);
		$this->db->from('user');
		$this->db->limit(1);
		return $this->db->get()->result_array();
	}

	public function set_session()
}
