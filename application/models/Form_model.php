<?php

/**

*

*/

class Form_model extends CI_Model{

	function __construct(){

		# code...

		parent::__construct();

	}

	public function insert($data){
		$this->db->insert('santri', $data);
		$insert_id = $this->db->insert_id();

   		return  $insert_id;
	}

	public function insert_status($data){
		$this->db->insert('status_santri', $data);
	}

}