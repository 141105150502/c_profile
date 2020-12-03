<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data','datamodel');
		cek_login();
		
	}

	public function index()
	{
		$data['tittle'] = "Visi dan Misi";

		// data
		// $data['role']= $this->db->get('t_role')->result();
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_visimisi');
		$this->load->view('backendtemp/footer', $data);
	}


    public function editvisimisi(){
    	$this->form_validation->set_rules('visimisi', 'Visi Misi', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	 $visimisi = $this->input->post('visimisi');
	    	 $id_profileperusahaan = $this->input->post('id_profileperusahaan');
	    	$data = ['visimisi_perusahaan' => $visimisi];
	    	$this->datamodel->prosesedit($id_profileperusahaan, $data);
            // $this->db->set('visimisi_perusahaan', $visimisi);
            // $this->db->where('id_profileperusahaan', $id_profileperusahaan);
            // $this->db->update('t_profileperusahaan');
    		echo json_encode(['status' => true, 'pesan' => 'Visi Misi berhasil di Ubah']);
    	}

        // echo $this->input->post('id_profileperusahaan');
    }



    public function viewmodaledit($id_profileperushaan){
    	$data['title'] = 'Edit Profile Perusahaan';
    	$data['result'] = $this->db->get_where('t_profileperusahaan',['id_profileperusahaan' => $id_profileperushaan])->row();

    	$this->load->view('viewtambahan/v_modaledit',$data);
    }


    // viewmodaledit

   

}





