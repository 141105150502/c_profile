<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profileuser extends CI_Model {


	public function updatewithfoto($id_user,$data)
	{
		$this->db->where('id_user',$id_user );
		$this->db->update('base_user', $data);
	}

	public function updatenofoto($id_user,$data){
		$this->db->where('id_user', $id_user);
		$this->db->update('base_user',$data);

	}

	
}
