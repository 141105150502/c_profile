<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['slide'] = $this->db->get('t_slider')->result();
		$data['profile']= $this->db->get('t_profileperusahaan')->row();
		$data['prdoukkami'] = $this->db->get('t_produk',10)->result();
		$this->db->order_by('tanggal_berita', 'desc');
		$data['beritaterbaru'] = $this->db->get('t_berita',6)->result();

		$this->load->view('front_header');
		$this->load->view('v_frontberanda', $data);
		$this->load->view('front_footer');
	}



}
