<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MX_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_berita','m_b');
        cek_login();
        
    }
 


	public function index()
	{
		// $this->load->view('welcome_message');
		$data['tittle'] = "Berita";
		// data
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar', $data);
		$this->load->view('v_berita');
		$this->load->view('backendtemp/footer', $data);
	}



	 function get_data()
    {
        $list = $this->m_b->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;

            $row[] = '<img src="'.base_url().'assets/gambar/berita/'.$field->gambar_berita.'" width="100px" alt="">';
            $row[] = $field->judul_berita;
            $row[] = $field->ulasan_berita;
            $row[] = $field->tanggal_berita;
            $row[] = $field->isi_berita;

            $row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapusdata('.$field->id_berita.')" alt="Hapus"><i class="fas fa-trash-alt"></i></button>
					  <button type="button" class="btn btn-sm  btn-warning" onclick="editmodal('.$field->id_berita.')" alt="Hapus"><i class="fas fa-edit"></i></button>';
 			
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_b->count_all(),
            "recordsFiltered" => $this->m_b->count_filtered(),
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

    public function saveberita(){

        $this->form_validation->set_rules('judul_berita','Judul Berita','trim|required');
        $this->form_validation->set_rules('kategori_berita', 'Kategori Berita', 'trim|required');
        $this->form_validation->set_rules('tanggal_terbit', 'Tanggal Terbit', 'trim|required');
        $this->form_validation->set_rules('isi_berita1', 'Isi Berita', 'trim|required');
        $this->form_validation->set_rules('ulasan_singkat', 'Ulasan Singkat', 'trim|required');
        // $this->form_validation->set_rules('gambar_berita', 'Gambar Berita', 'trim|required');


        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            if ($_FILES['gambar_berita']['name'] != '') {

                $judul_berita = htmlspecialchars($this->input->post('judul_berita'));
                $kategori_berita =$this->input->post('kategori_berita');
                $tanggal_terbit = htmlspecialchars($this->input->post('tanggal_terbit'));
                $isiberita1 = $this->input->post('isi_berita1');
                $ulasan_singkat = $this->input->post('ulasan_singkat');

                $gambar_berita = $this->_uploadgambar('gambar_berita');


                $data = [
                    'judul_berita' => $judul_berita,
                    'tkat_id' => $kategori_berita,
                    'tanggal_berita' => $tanggal_terbit,
                    'isi_berita' => $isiberita1,
                    'ulasan_berita' => $ulasan_singkat,
                    'gambar_berita' =>  $gambar_berita
                    ];

                $this->db->insert('t_berita', $data);

                echo json_encode(['status' => true, 'pesan' => 'Berita baru berhasil di tambahkan']);
                # code...
            }else{

             

                echo json_encode(['status' => false, 'pesan' => 'Gambar Berita tidak boleh kosong']);

            }
        

        }

    }




    public function viewmodaledit($id_berita){
        $data['title'] = 'Edit Berita';
        
        $data['kategori_berita'] = $this->db->get('t_kategoriberita')->result();

        $data['get_berita'] = $this->m_b->getedit($id_berita)->row(); 

        $this->load->view('viewtambahan/v_modaledit',$data);
    }

     public function editdata(){
        $this->form_validation->set_rules('judul_berita','Judul Berita','trim|required');
        $this->form_validation->set_rules('kategori_berita', 'Kategori Berita', 'trim|required');
        $this->form_validation->set_rules('tanggal_terbit', 'Tanggal Terbit', 'trim|required');
        $this->form_validation->set_rules('isi_berita2', 'Isi Berita', 'trim|required');
        $this->form_validation->set_rules('ulasan_singkat', 'Ulasan Singkat', 'trim|required');
        // $this->form_validation->set_rules('gambar_berita', 'Gambar Berita', 'trim|required');


        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
                $judul_berita = htmlspecialchars($this->input->post('judul_berita'));
                $kategori_berita =$this->input->post('kategori_berita');
                $tanggal_terbit = htmlspecialchars($this->input->post('tanggal_terbit'));
                $isi_berita2 = $this->input->post('isi_berita2');
                $ulasan_singkat = $this->input->post('ulasan_singkat');
                $id_berita = $this->input->post('id_berita');
            if ($_FILES['gambar_berita']['name'] != '') {


                $config['upload_path'] = './assets/gambar/berita';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = '1000';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                
                $this->load->library('upload', $config);
                
                if ($this->upload->do_upload('gambar_berita')){
            
                    unlink('./assets/gambar/berita/'.$this->input->post('gambar_beritalama'));

                    $gambar_berita = $this->upload->data('file_name');
                }



                $this->db->set('judul_berita',$judul_berita);
                $this->db->set('tkat_id',$kategori_berita);
                $this->db->set('tanggal_berita', $tanggal_terbit);
                $this->db->set('isi_berita', $isi_berita2);
                $this->db->set('ulasan_berita', $ulasan_singkat);
                $this->db->set('gambar_berita',  $gambar_berita);
                $this->db->where('id_berita', $id_berita);
                $this->db->update('t_berita');
                // $this->db->update('t_berita', $data);

                echo json_encode(['status' => true, 'pesan' => 'Berita berhasil di Ubah']);
                # code...
            }else{
           
                $this->db->set('judul_berita',$judul_berita);
                $this->db->set('tkat_id',$kategori_berita);
                $this->db->set('tanggal_berita', $tanggal_terbit);
                $this->db->set('isi_berita', $isi_berita2);
                $this->db->set('ulasan_berita', $ulasan_singkat);
                $this->db->where('id_berita', $id_berita);
                $this->db->update('t_berita');
                echo json_encode(['status' => true, 'pesan' => 'berita berhasil di Ubah']);

            }
        

        }

    }

    public function hapus($id){
        $this->db->where('id_berita', $id);
        $gambarberita = $this->db->get('t_berita')->row()->gambar_berita;
        unlink('./assets/gambar/berita/'.$gambarberita);


        $this->db->where('id_berita', $id);
        $result = $this->db->delete('t_berita');

        if ($result) {
            echo json_encode(['status' => true, 'pesan' => 'Berita Berhasil Terhapus']);
        }else{

            echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
        }
    }



    private function _uploadgambar($gambar_berita){
        $config['upload_path'] = './assets/gambar/berita';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($gambar_berita)){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            // $data = array('upload_data' => $this->upload->data());
            return $this->upload->data('file_name');
        }
    }


   


}
