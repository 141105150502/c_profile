<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MX_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_produk','m_produk');
        cek_login();
        
    }
 


	public function index()
	{
		// $this->load->view('welcome_message');
		$data['tittle'] = "Produk";
		// data
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar', $data);
		$this->load->view('v_produk');
		$this->load->view('backendtemp/footer', $data);
	}



	 function get_data()
    {
        $list = $this->m_produk->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;

            $row[] = '<img src="'.base_url().'assets/gambar/produk/'.$field->gambar_produk.'" width="100px" alt="">';
            $row[] = $field->nama_produk;
            $row[] = $field->deskripsi_produk;
           
            $row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapusdata('.$field->id_produk.')" alt="Hapus"><i class="fas fa-trash-alt"></i></button>
					  <button type="button" class="btn btn-sm  btn-warning" onclick="editmodal('.$field->id_produk.')" alt="Hapus"><i class="fas fa-edit"></i></button>';
 			
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_produk->count_all(),
            "recordsFiltered" => $this->m_produk->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSONs
        echo json_encode($output);
    }

    public function viewmodaladd(){
        $data['title'] = 'Tambah Prduk';
        
        $this->load->view('viewtambahan/v_modaltambah',$data);
    }   

    public function saveproduk(){

        $this->form_validation->set_rules('nama_produk','Nama Poduk','trim|required');
        $this->form_validation->set_rules('deskprod', 'Deskripsi Produk', 'trim|required');
      
        // $this->form_validation->set_rules('gambar_berita', 'Gambar Berita', 'trim|required');


        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            if ($_FILES['gambar_produk']['name'] != '') {

                $nama_produk = htmlspecialchars($this->input->post('nama_produk'));
                $deskripsi_produk =$this->input->post('deskprod');
                $gambar_produk = $this->_uploadgambar('gambar_produk');

                    $data = [
                        'nama_produk' => $nama_produk,
                        'deskripsi_produk' => $deskripsi_produk,
                        'gambar_produk' => $gambar_produk
                        ];

                    $this->db->insert('t_produk', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Produk baru berhasil di tambahkan']);
                # code...
            }else{

                echo json_encode(['status' => false, 'pesan' => 'Gambar Produk tidak boleh kosong']);

            }
        

        }

    }


    public function viewmodaledit($id_produk){
        $data['title'] = 'Edit Produk';
        
        $data['get_produk'] = $this->m_produk->getedit($id_produk)->row(); 

        $this->load->view('viewtambahan/v_modaledit',$data);
    }



    public function editdata(){
        $this->form_validation->set_rules('nama_produk','Nama Poduk','trim|required');
        $this->form_validation->set_rules('deskprod1', 'Deskripsi Produk', 'trim|required');
      
        // $this->form_validation->set_rules('gambar_berita', 'Gambar Berita', 'trim|required');


        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            $nama_produk = htmlspecialchars($this->input->post('nama_produk',true));
            $deskripsi_produk =$this->input->post('deskprod1',true);
            $gambar_lama = $this->input->post('gambar_lama',true);
            $id_produk = $this->input->post('id_produk',true);

            if ($_FILES['gambar_produk']['name'] != '') {


                $gambar_produk = $this->_uploadgambar('gambar_produk',true);
                if (file_exists('./assets/gambar/produk/'.$gambar_lama)) {
                    unlink('./assets/gambar/produk/'.$gambar_lama);
                }

                    $data = [
                        'nama_produk' => $nama_produk,
                        'deskripsi_produk' => $deskripsi_produk,
                        'gambar_produk' => $gambar_produk
                        ];

                    $this->db->where('id_produk', $id_produk);
                    $this->db->update('t_produk', $data);

                    echo json_encode(['status' => true, 'pesan' => 'Produk baru berhasil di ubah']);
                # code...
            }else{

                 $data = [
                        'nama_produk' => $nama_produk,
                        'deskripsi_produk' => $deskripsi_produk,
                        'gambar_produk' => $gambar_lama
                        ];

                    $this->db->where('id_produk', $id_produk);
                    $this->db->update('t_produk', $data);

                echo json_encode(['status' => true, 'pesan' => 'Produk baru berhasil di ubah']);

            }
        

        }

    }

    public function hapus($id){
        $this->db->where('id_produk', $id);
        $gambar_produk = $this->db->get('t_produk')->row()->gambar_produk;


        if (file_exists('./assets/gambar/produk/'.$gambar_produk)) {
            unlink('./assets/gambar/produk/'.$gambar_produk);
        }


        $this->db->where('id_produk', $id);
        $result = $this->db->delete('t_produk');

        if ($result) {
            echo json_encode(['status' => true, 'pesan' => 'Produk Berhasil Terhapus']);
        }else{

            echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
        }
    }



    private function _uploadgambar($gambar_produk){
        $config['upload_path'] = './assets/gambar/produk';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($gambar_produk)){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            // $data = array('upload_data' => $this->upload->data());
            return $this->upload->data('file_name');
        }
    }



}
