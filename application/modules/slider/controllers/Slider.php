<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends MX_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_slider','m_slider');
        cek_login();
        
    }
 


	public function index()
	{
		// $this->load->view('welcome_message');
		$data['tittle'] = "Slider";
		// data
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar', $data);
		$this->load->view('v_slider');
		$this->load->view('backendtemp/footer', $data);
	}



	 function get_data()
    {
        $list = $this->m_slider->get_datatables();
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
            "recordsTotal" => $this->m_slider->count_all(),
            "recordsFiltered" => $this->m_slider->count_filtered(),
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


    public function viewmodaledit($id_slider){
        $data['title'] = 'Edit Berita';
        
        $data['get_slider'] = $this->m_slider->getedit($id_slider)->row(); 

        $this->load->view('viewtambahan/v_modaledit',$data);
    }

     public function editdata(){
       
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
                $id_slider = $this->input->post('id_slider');
                $gambarlama = $this->input->post('gambar_sliderold');
               
                $nmfile = "slider_".time(); //nama file + fungsi time
                $config['upload_path'] = './assets/gambar/slider';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = '2000';
                $config['max_width']  = '1800';
                $config['max_height']  = '1000';
                $config['file_name'] = $nmfile; //nama yang terupload nantinya

                
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('gambar_slider')){
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->upload->display_errors();
                    // $gambar_slider = 'tes';

                }else{
                    // $data = array('upload_data' => $this->upload->data());
                    if ($gambarlama != '') {
                        if (file_exists('assets/gambar/slider/'.$gambarlama)) {
                            # code...
                            unlink('assets/gambar/slider/'.$gambarlama);
                        }
                        # code...
                    }

                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['source_image']='./assets/gambar/slider/'.$gbr['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= FALSE;
                    $config['quality']= '50%';
                    $config['width']= 1500;
                    $config['height']= 450;
                    $config['new_image']= './assets/gambar/slider/'.$gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $gambar_slider = $gbr['file_name'];


                    // $gambar_slider = $this->upload->data('file_name');
                }

                if ($this->input->post('aktif_slider')) {


                    $data = [
                        'judul_slider' => $judul_slider,
                        'minitext_slider' => $minitext_slider,
                        'gambar_slider' => $gambar_slider,
                        'aktif_slider' => 1
                        ];

                    $this->db->where('id_slider', $id_slider);
                    $this->db->update('t_slider', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Slider berhasil di tambahkan']);
                    
                }else{
                    $data = [
                        'judul_slider' => $judul_slider,
                        'minitext_slider' => $minitext_slider,
                        'gambar_slider' => $gambar_slider,
                        'aktif_slider' => 0
                        ];
                    
                    $this->db->where('id_slider', $id_slider);
                    $this->db->update('t_slider', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Slider berhasil di ubah']);

                }

                # code...
            }else{


                $judul_slider = htmlspecialchars($this->input->post('judul_slider'));
                $minitext_slider =$this->input->post('minitext_slider');
                $gambarlama = $this->input->post('gambar_sliderold');

                // $gambar_slider = $this->_uploadgambar('gambar_slider');

                if ($this->input->post('aktif_slider',true)) {


                    $data = [
                        'judul_slider' => $judul_slider,
                        'minitext_slider' => $minitext_slider,
                        // 'gambar_slider' => $this->input->post('gambar_sliderold'),
                        'aktif_slider' => 1
                        ];

                    $this->db->where('id_slider', $this->input->post('id_slider'));

                    $this->db->update('t_slider', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Slider berhasil di ubah']);
                    
                }else{
                    $data = [
                        'judul_slider' => $judul_slider,
                        'minitext_slider' => $minitext_slider,
                        // 'gambar_slider' => $gambar_slider,
                        'aktif_slider' => 0
                        ];
                    $this->db->where('id_slider', $this->input->post('id_slider'));

                    $this->db->update('t_slider', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Slider berhasil di ubah']);

                }




             

                // echo json_encode(['status' => false, 'pesan' => 'Gambar Slider tidak boleh kosong']);

            }
        

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



    private function _uploadgambar($gambar_slider){
        $nmfile = "slider_".time(); //nama file + fungsi time

        $config['upload_path'] = './assets/gambar/slider';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['max_width']  = '1800';
        $config['max_height']  = '1000';
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($gambar_slider)){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library']='gd2';
            $config['source_image']='./assets/gambar/slider/'.$gbr['file_name'];
            $config['create_thumb']= FALSE;
            $config['maintain_ratio']= FALSE;
            $config['quality']= '50%';
            $config['width']= 1500;
            $config['height']= 450;
            $config['new_image']= './assets/gambar/slider/'.$gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            return $gbr['file_name'];
        }
    }



}
