<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah_perusahaan extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_sejarah','datamodel');
		cek_login();
		
	}

	public function index()
	{
		$data['tittle'] = "Sejarah Perusahaan";

		// data
		// $data['role']= $this->db->get('t_role')->result();
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_sejarah');
		$this->load->view('backendtemp/footer', $data);
	}


    public function editsejarah(){
    	$this->form_validation->set_rules('sejarah', 'Sejarah Perusahaan', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	$sejarah = $this->input->post('sejarah');
	    	$id_profileperusahaan = $this->input->post('id_profileperusahaan');
	    	$data = ['sejarah_perusahaan' => $sejarah];

	    	$this->datamodel->prosesedit($id_profileperusahaan, $data);

    		echo json_encode(['status' => true, 'pesan' => 'Visi Misi berhasil di Ubah']);
    	}

        // echo $this->input->post('id_profileperusahaan');
    }



    public function viewmodaledit($id_profileperushaan){
    	$data['title'] = 'Edit Sejarah Perusahaan';
    	$data['result'] = $this->db->get_where('t_profileperusahaan',['id_profileperusahaan' => $id_profileperushaan])->row();

    	$this->load->view('viewtambahan/v_modaledit',$data);
    }


    // viewmodaledit

   

}





