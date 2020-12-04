<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_organisasi extends MX_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_struturorg','m_data');
        cek_login();
        
    }
 


	public function index()
	{
		// $this->load->view('welcome_message');
		$data['tittle'] = "Struktur Organisasi";
		// data
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar', $data);
		$this->load->view('v_strukturoraganisasi');
		$this->load->view('backendtemp/footer', $data);
	}



    public function viewmodaledit($id_profileperusahaan){
        $data['title'] = 'Edit Profile Perusahaan';
        
        $data['result'] = $this->m_data->getedit($id_profileperusahaan)->row(); 

        $this->load->view('viewtambahan/v_modaledit',$data);
    }

     public function editdata(){
       
        $this->form_validation->set_rules('deskripsistruktur','Deskripsi struktur Oragnisasi', 'trim|required');


        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            if ($_FILES['struktur_organisasigambar']['name'] != '') {

               
               
                $config['upload_path'] = './assets/gambar/profile_perusahaan';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = '1000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('struktur_organisasigambar')){
                    $error = array('error' => $this->upload->display_errors());
                }else{
                    if(file_exists('assets/gambar/profile_perusahaan/'.$this->input->post('gambar_sturukturold'))){
                        unlink('assets/gambar/profile_perusahaan/'.$this->input->post('gambar_sturukturold'));
                    }
                       $struktur_organisasigambar = $this->upload->data('file_name');

                   // die();
                }



                $data = [
                    'struktur_organisasigambar' => $struktur_organisasigambar,
                    'struktur_organisasideskripsi' => $this->input->post('deskripsistruktur')
                    ];

                $this->db->where('id_profileperusahaan', $this->input->post('id_profileperusahaan'));
                $this->db->update('t_profileperusahaan', $data);

                echo json_encode(['status' => true, 'pesan' => 'Struktur Organiasai berhasil di Ubah']);
                    
                # code...
            }else{


                $struktur_organisasideskripsi = $this->input->post('struktur_organisasideskripsi');
                $gambarlama = $this->input->post('gambar_sturukturold');


                    $data = [
                        'struktur_organisasideskripsi' => $this->input->post('struktur_organisasideskripsi'),
                        ];
                    $this->db->where('id_profileperusahaan', $this->input->post('id_profileperusahaan'));

                    $this->db->update('t_profileperusahaan', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Struktur Organiasai berhasil di ubah']);


             
            }
        

        }

    }

  

    private function _uploadgambar($struktur_organisasigambar){
        $config['upload_path'] = './assets/gambar/profile_perusahaan';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($struktur_organisasigambar)){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            // $data = array('upload_data' => $this->upload->data());
            return $this->upload->data('file_name');
        }
    }



}
