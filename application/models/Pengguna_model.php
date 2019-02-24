<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//write less do more
	}

	public function get_id_level()
	{
		$this->db->select('level_id , level_nama')
				->from('level');
		$res = $this->db->get();

		return $res->result();
	}
}