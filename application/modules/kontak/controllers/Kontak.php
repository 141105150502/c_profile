<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends MX_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_kontak','m_kontak');
        cek_login();
        
    }
 


	public function index()
	{
		// $this->load->view('welcome_message');
		$data['tittle'] = "Kontak";
		// data
        $data['cprofile'] = $this->db->get('t_profileperusahaan')->row();
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar', $data);
		$this->load->view('v_slider');
		$this->load->view('backendtemp/footer', $data);
	}



	 function get_data()
    {
        $list = $this->m_kontak->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;

            $row[] = '<img src="'.base_url().'assets/gambar/slider/'.$field->gambar_slider.'" width="100px" alt="">';
            $row[] = $field->judul_slider;
            $row[] = $field->minitext_slider;
            if ($field->aktif_slider == 0) {
                $aktif = '<span class="badge badge-danger">Non Aktif</span>';
            }else{
                $aktif = '<span class="badge badge-success">Aktif</span>';

            }
            $row[] = $aktif;


            $row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapusdata('.$field->id_slider.')" alt="Hapus"><i class="fas fa-trash-alt"></i></button>
					  <button type="button" class="btn btn-sm  btn-warning" onclick="editmodal('.$field->id_slider.')" alt="Hapus"><i class="fas fa-edit"></i></button>';
 			
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_kontak->count_all(),
            "recordsFiltered" => $this->m_kontak->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function viewmodaladd(){
        $data['title'] = 'Tambah Berita';
        
        $data['kategori_berita'] = $this->db->get('t_kategoriberita')->result();
        $this->load->view('viewtambahan/v_modaltambah',$data);
    }   

    public function saveslider(){

        $this->form_validation->set_rules('judul_slider','Judul Slider','trim|required');
        $this->form_validation->set_rules('minitext_slider', 'Mini Text Slider', 'trim|required');
      
        // $this->form_validation->set_rules('gambar_berita', 'Gambar Berita', 'trim|required');


        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            if ($_FILES['gambar_slider']['name'] != '') {

                $judul_slider = htmlspecialchars($this->input->post('judul_slider'));
                $minitext_slider =$this->input->post('minitext_slider');
                $gambar_slider = $this->_uploadgambar('gambar_slider');

                if ($this->input->post('aktif_slider',true)) {


                    $data = [
                        'judul_slider' => $judul_slider,
                        'minitext_slider' => $minitext_slider,
                        'gambar_slider' => $gambar_slider,
                        'aktif_slider' => 1
                        ];

                    $this->db->insert('t_slider', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Slider baru berhasil di tambahkan']);
                    
                }else{
                    $data = [
                        'judul_slider' => $judul_slider,
                        'minitext_slider' => $minitext_slider,
                        'gambar_slider' => $gambar_slider,
                        'aktif_slider' => 0
                        ];

                    $this->db->insert('t_slider', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Slider baru berhasil di tambahkan']);

                }

                # code...
            }else{

                echo json_encode(['status' => false, 'pesan' => 'Gambar Slider tidak boleh kosong']);

            }
        

        }

    }


    public function viewmodaledit($id_profileperusahaan){
        $data['title'] = 'Edit Berita';
        
        $data['get_company'] = $this->m_kontak->getedit($id_profileperusahaan)->row(); 

        $this->load->view('viewtambahan/v_modaledit',$data);
    }

    public function editdata(){
       
        $this->form_validation->set_rules('nama_perusahaan','Nama Perusahaan','trim|required');
        $this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'trim|required');
        $this->form_validation->set_rules('telepon_perusahaan', 'Telepon Perusahaan', 'trim|required');
        $this->form_validation->set_rules('deskripsi_singkat', 'Deskripsi Perusahaan', 'trim|required');
      


        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            

                $id_profileperusahaan = $this->input->post('id_profileperusahaan');
                $nama_perusahaan = $this->input->post('nama_perusahaan');
                $alamat_perusahaan = $this->input->post('alamat_perusahaan');
                $telepon_perusahaan = $this->input->post('telepon_perusahaan');
                $deskripsi_singkat = $this->input->post('deskripsi_singkat');
                $facebook_perusahaan = $this->input->post('facebook_perusahaan');
                $link_facebook = $this->input->post('link_facebook');
                $twiter_perusahaan = $this->input->post('twiter_perusahaan');
                $link_twiter = $this->input->post('link_twiter');
                $instagram_perusahaan = $this->input->post('instagram_perusahaan');
                $link_instagram = $this->input->post('link_instagram');
                $lokasi_gps = $this->input->post('lokasi_gps');
             


            if ($_FILES['gambar_perusahaan']['name'] != '') {
                $gambar = $this->input->post('gambar_perusahaanold');
                if ($gambar != '') {
                    if (file_exists('./assets/gambar/profile_perusahaan/'.$gambar)) {
                        unlink('./assets/gambar/profile_perusahaan/'.$gambar);
                    }
                }
                $gambar_perusahaan = $this->_uploadgambar('gambar_perusahaan');
            }else{
                $gambar_perusahaan = $this->input->post('gambar_perusahaanold');
            };

           
            if ($_FILES['logo_perusahaan']['name'] != '') {
                $logo = $this->input->post('logo_perusahaanold');
                if ($logo != '') {
                    if (file_exists('./assets/gambar/profile_perusahaan/'.$logo)) {
                        unlink('./assets/gambar/profile_perusahaan/'.$logo);
                    }
                }

               $logo_perusahaan = $this->_uploadlogo('logo_perusahaan');
            }else{
                $logo_perusahaan = $this->input->post('logo_perusahaanold');
            };

           $data = [
                'nama_perusahaan' => $nama_perusahaan,
                'alamat_perusahaan' => $alamat_perusahaan,
                'telepon_perusahaan' => $telepon_perusahaan,
                'deskripsi_singkat' => $deskripsi_singkat,
                'facebook_perusahaan' => $facebook_perusahaan,
                'link_facebook' => $link_facebook,
                'twiter_perusahaan' => $twiter_perusahaan,
                'link_twiter' => $link_twiter,
                'instagram_perusahaan' => $instagram_perusahaan,
                'link_instagram' => $link_instagram,
                'lokasi_gps' => $lokasi_gps,
                'gambar_perusahaan' => $gambar_perusahaan,
                'logo_perusahaan' => $logo_perusahaan
                ];
            
            $this->db->where('id_profileperusahaan', $id_profileperusahaan);
            $this->db->update('t_profileperusahaan', $data);


            echo json_encode(['status' => true, 'pesan' => 'Slider berhasil di ubah']);
        }

    }

    public function hapus($id){
        $this->db->where('id_slider', $id);
        $gambar_slider = $this->db->get('t_slider')->row()->gambar_slider;
        if ( $gambar_slider !='') {
            # code...
            if (file_exists('./assets/gambar/slider/'.$gambar_slider)) {
                # code...
                unlink('./assets/gambar/slider/'.$gambar_slider);
            }
        }


        $this->db->where('id_slider', $id);
        $result = $this->db->delete('t_slider');

        if ($result) {
            echo json_encode(['status' => true, 'pesan' => 'Slider Berhasil Terhapus']);
        }else{

            echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
        }
    }



    private function _uploadgambar($gambar_profile_perusahaan){
        $nmfile = "slider_".time(); //nama file + fungsi time

        $config['upload_path'] = './assets/gambar/profile_perusahaan';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['max_width']  = '1800';
        $config['max_height']  = '1000';
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($gambar_profile_perusahaan)){
            $error = array('error' => $this->upload->display_errors());
        }
        else{


            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/gambar/profile_perusahaan/'.$gbr['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '50%';
            $config['width']= 200;
            $config['height']= 150;
            $config['new_image']= './assets/gambar/profile_perusahaan/'.$gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            return $gbr['file_name'];
        }
    }



    private function _uploadlogo($logo_perusahaan){
        $nmfile = "logo_".time(); //nama file + fungsi time

        $config['upload_path'] = './assets/gambar/profile_perusahaan';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['max_width']  = '1800';
        $config['max_height']  = '1000';
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($logo_perusahaan)){
            $error = array('error' => $this->upload->display_errors());
        }
        else{


            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/gambar/profile_perusahaan/'.$gbr['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '50%';
            $config['width']= 199;
            $config['height']= 64;
            $config['new_image']= './assets/gambar/profile_perusahaan/'.$gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            return $gbr['file_name'];
        }
    }







}
