<?php

/**

*

*/

class Home_model extends CI_Model{

	function __construct(){

		# code...

		parent::__construct();

	}

	public function get_univ_list(){
		$this->db->select('*');
		$this->db->from('universitas');

		return $this->db->get();

	}

	public function get_data($tabel){
		$this->db->select('*');
		$this->db->from($tabel);

		return $this->db->get();
	}

	public function get_data_by_id($id, $tabel){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where($id);

		return $this->db->get();
	}

}