<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class katalog_file extends MX_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_katalogfile','m_data');
        cek_login();
        
    }
 


	public function index()
	{
		// $this->load->view('welcome_message');
		$data['tittle'] = "Katalog File";
		// data
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar', $data);
		$this->load->view('v_katalogfile');
		$this->load->view('backendtemp/footer', $data);
	}



	 function get_data()
    {
        $list = $this->m_data->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;

            $row[] = $field->keterangan_file;
            if ($field->nama_file != '') {
                # code...
            $row[] = '<a href="'.base_url().'assets/gambar/katalog_file/'.$field->nama_file.'"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;'.$field->nama_file.'</a>';
            }else{
                $row[] = '';
            }
          

            $row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapusdata('.$field->id_file.')" alt="Hapus"><i class="fas fa-trash-alt"></i></button>
                <a href="'.base_url().'sub_katalogfile/index/'.$field->id_file.'" class="btn btn-sm btn-warning" alt="Hapus"><i class="fas fa-file"></i></a>
					  <button type="button" class="btn btn-sm  btn-success" onclick="editmodal('.$field->id_file.')" alt="Hapus"><i class="fas fa-edit"></i></button>';
 			
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_data->count_all(),
            "recordsFiltered" => $this->m_data->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function viewmodaladd(){
        $data['title'] = 'Tambah Katalog File';
        
        $this->load->view('viewtambahan/v_modaltambah',$data);
    }   

    public function savefile(){

        $this->form_validation->set_rules('keterangan_file','Keterangan File','trim|required');
      
        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            if ($_FILES['filenya']['name'] != '') {

                $keterangan_file = htmlspecialchars($this->input->post('keterangan_file'));
                $nama_file = $this->_uploadgambar('filenya');


                    $data = [
                        'keterangan_file' => $keterangan_file,
                        'nama_file' => $nama_file,
                        ];

                    $this->db->insert('t_katalogfile', $data);

                    echo json_encode(['status' => true, 'pesan' => 'File baru berhasil di tambahkan']);
                # code...
            }else{
                $keterangan_file = htmlspecialchars($this->input->post('keterangan_file'));

                $data = [
                    'keterangan_file' => $keterangan_file,
                    'nama_file' => '-',
                    ];

                $this->db->insert('t_katalogfile', $data);

                echo json_encode(['status' => true, 'pesan' => 'File baru berhasil di tambahkan']);

                // echo json_encode(['status' => false, 'pesan' => 'Kolom File tidak boleh kosong']);
            }

        }

    }




    public function viewmodaledit($id_katalogfile){
        $data['title'] = 'Edit File';
        
        $data['get_file'] = $this->m_data->getedit($id_katalogfile)->row(); 

        $this->load->view('viewtambahan/v_modaledit',$data);
    }


    public function editdata(){

        $this->form_validation->set_rules('keterangan_file','Keterangan File','trim|required');
      
        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            if ($_FILES['filenya']['name'] != '') {

                $keterangan_file = htmlspecialchars($this->input->post('keterangan_file'));
                $filelama = $this->input->post('filelama');
                $nama_file = $this->_uploadgambar('filenya');
                $id_file = $this->input->post('id_file');
                if (file_exists('./assets/gambar/katalog_file/'.$filelama)) {
                    unlink('./assets/gambar/katalog_file/'.$filelama);
                }


                    $data = [
                        'keterangan_file' => $keterangan_file,
                        'nama_file' => $nama_file
                        ];

                    $this->db->where('id_file', $id_file);
                    $this->db->update('t_katalogfile', $data);

                    echo json_encode(['status' => true, 'pesan' => 'berhasil di Ubah']);
                # code...
            }else{

                $keterangan_file = htmlspecialchars($this->input->post('keterangan_file'));
                $id_file = $this->input->post('id_file');


                    $data = [
                        'keterangan_file' => $keterangan_file,
                        ];

                    $this->db->where('id_file', $id_file);
                    $this->db->update('t_katalogfile', $data);

                    echo json_encode(['status' => true, 'pesan' => 'File di ubah']);
            }

        }

    }

    public function hapus($id){
        $this->db->where('id_file', $id);
        $nama_file = $this->db->get('t_katalogfile')->row()->nama_file;
        if (file_exists('./assets/gambar/katalog_file/'.$nama_file)) {
            unlink('./assets/gambar/katalog_file/'.$nama_file);
        }


        $this->db->where('id_file', $id);
        $result = $this->db->delete('t_katalogfile');

        if ($result) {
            echo json_encode(['status' => true, 'pesan' => 'Slider Berhasil Terhapus']);
        }else{

            echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
        }
    }



    private function _uploadgambar($filenya){
        $config['upload_path'] = './assets/gambar/katalog_file';
        $config['allowed_types'] = 'pdf|doc|xls|csv|docx';
        $config['max_size']  = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['file_name'] = $nmfile; 
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($filenya)){
            // $error = array('error' => $this->upload->display_errors());
           echo  $this->upload->display_errors();
        }
        else{
            // $data = array('upload_data' => $this->upload->data());
            return $this->upload->data('file_name');
        }
    }



}
