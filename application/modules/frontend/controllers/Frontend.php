<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('model_frontend', 'm_f');
	}

	
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

	public function list_berita($filter = '')
	{	
		if ($this->input->get('filter')) {

			echo $this->input->get('filter');
				$array = array(
				'filter' => $this->input->get('filter')
			);
			
			$this->session->set_userdata( $array );
		}

		if ($this->input->get('unset')) {
			$this->session->unset_userdata('filter');
		}

	

		$data['judul'] = 'List Berita';


		$this->load->library('pagination');
		
		$config['base_url'] = base_url('frontend/list_berita/');
		$config['total_rows'] = $this->m_f->getallberita();
		$config['per_page'] = 10;

		$config['uri_segment'] = 3;
		$config['num_links'] = 1;
		$config['full_tag_open'] = '<nav class="blog-pagination justify-content-center d-flex">
                            		<ul class="pagination">';
		$config['full_tag_close'] = '</ul>
			                        </nav>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-link">';	
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-link">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = ' <li class="page-link">';
		$config['prev_tag_close'] = ' </li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['anchor_class'] = 'class="page-link"';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['list_berita'] = $this->m_f->data_berita($config['per_page'],$data['page']);
		$data['kategori_berita'] = $this->db->get('t_kategoriberita')->result();

		$data ['tampil'] =  $this->pagination->create_links();
	
		
		$this->load->view('front_header');
		$this->load->view('v_listberita', $data);
		$this->load->view('front_footer');

	
		
	}


	public function front_sejarah()
	{

		$data['judul'] = 'Sejarah Perusahaan';
		$data['cprofile'] = $this->db->get('t_profileperusahaan')->row();

		$this->load->view('front_header');
		$this->load->view('v_frontsejarah', $data);
		$this->load->view('front_footer');
	}


	public function front_visimisi()
	{

		$data['judul'] = 'Visi Misi Perusahaan';
		$data['cprofile'] = $this->db->get('t_profileperusahaan')->row();

		$this->load->view('front_header');
		$this->load->view('v_frontvisimisi', $data);
		$this->load->view('front_footer');
	}


	public function front_strukturorg()
	{

		$data['judul'] = 'Sejarah Perusahaan';
		$data['cprofile'] = $this->db->get('t_profileperusahaan')->row();

		$this->load->view('front_header');
		$this->load->view('v_frontstrukturorg', $data);
		$this->load->view('front_footer');
	}


	public function front_kontak()
	{

		$data['judul'] = 'Kontak Kami';
		$data['cprofile'] = $this->db->get('t_profileperusahaan')->row();

		$this->load->view('front_header');
		$this->load->view('v_frontkontak', $data);
		$this->load->view('front_footer');
	}



	public function front_karir()
	{

		$data['judul'] = 'Karir';
		$data['karir'] = $this->db->get('t_karir')->result();

		$this->load->view('front_header');
		$this->load->view('v_frontkarir', $data);

		$this->load->view('front_footer');
	}


	public function front_produklayanan()
	{

		$data['judul'] = 'Produk dan Layanan';
		$data['produk'] = $this->db->get('t_produk')->result_array();


		$this->load->view('front_header');
		$this->load->view('v_frontproduklayanan', $data);
		$this->load->view('front_footer');
	}

	public function detile_berita($id_berita){
		$data['kategori_berita'] = $this->db->get('t_kategoriberita')->result();
		$data['getberita'] = $this->db->get('t_berita',['id_berita' => $id_berita])->row();
		$data['judul'] = $data['getberita']->judul_berita;

		$this->load->view('front_header');
		$this->load->view('v_frontdetileberita', $data);
		$this->load->view('front_footer');
	}





}
