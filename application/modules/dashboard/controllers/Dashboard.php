<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {
	public function __construct(){
		parent::__construct();
		cek_login();
	}

	public function index()
	{
		
		$data['tittle'] = "Dashboard";
		// data
		// $data['isidata']= $this->load->model('data');
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_dashboard');
		$this->load->view('backendtemp/footer', $data);
	}
}
