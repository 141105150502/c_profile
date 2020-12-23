<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_frontend extends CI_Model
{

	
	public function getallberita()
	{
		if($this->session->userdata('filter')){
		
			$this->db->where('tkat_id',  $this->session->userdata('filter'));
		}


		return $this->db->get('t_berita')->num_rows();
	}


	public function data_berita($limit,$tampil){

		if($this->session->userdata('filter')){
			$this->db->where('tkat_id',  $this->session->userdata('filter'));
		}
		return $this->db->get('t_berita',$limit,$tampil)->result();
	}


	// public function getallberitafilter($where){
	// 	$this->db->where('tkat_id',  $this->session->userdata('filter'));
	// 	return $this->db->get('t_berita')->num_rows();
	// }

	// public function data_beritafilter($limit,$tampil,$where){
	// 	$this->db->where('tkat_id', $this->session->userdata('filter'));
	// 	return $this->db->get('t_berita',$limit,$tampil)->result();
	// }


	


	



}
