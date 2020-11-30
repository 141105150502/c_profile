<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_auth extends CI_Model {


	public function addregister($data)
	{
		return $this->db->insert('base_user', $data);

	}

	
}
