<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_katalogfile extends MX_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_subkatalogfile','m_data');
        cek_login();
        
    }
 


	public function index()
	{
		// $this->load->view('welcome_message');
        $this->db->where('id_file', $this->uri->segment(3));
        $kf = $this->db->get('t_katalogfile')->row()->keterangan_file;
		$data['tittle'] = "Sub Katalog File". $kf;
		// data
        $data['id_file'] = $this->uri->segment(3);
		// enddata
		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar', $data);
		$this->load->view('v_subkatalogfile');
		$this->load->view('backendtemp/footer', $data);
	}



	 function get_data($id)
    {
        $list = $this->m_data->get_datatables($id);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;

            $row[] = $field->keterangan_subfile;
            $row[] = '<a href="'.base_url().'assets/gambar/katalog_file/'.$field->nama_subfile.'"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;'.$field->nama_subfile.'</a>';
          

            $row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapusdata('.$field->id_subfile.')" alt="Hapus"><i class="fas fa-trash-alt"></i></button>
                <a href="'.base_url().'sub_katalogfile" class="btn btn-sm btn-warning" alt="Hapus"><i class="fas fa-file"></i></a>
					  <button type="button" class="btn btn-sm  btn-success" onclick="editmodal('.$field->id_subfile.')" alt="Hapus"><i class="fas fa-edit"></i></button>';
 			
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

    public function viewmodaladd($id){
        $data['title'] = 'Tambah Katalog File';
        $data['id_filenya'] = $id;
        
        $this->load->view('viewtambahan/v_modaltambah',$data);
    }   

    public function savefile(){

        $this->form_validation->set_rules('keterangan_subfile','Keterangan File','trim|required');
      
        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            if ($_FILES['filenya']['name'] != '') {

                $keterangan_subfile = htmlspecialchars($this->input->post('keterangan_subfile'));
                $tsf_id_file = htmlspecialchars($this->input->post('tsf_id_file'));
                $nama_file = $this->_uploadgambar('filenya');


                    $data = [
                        'keterangan_subfile' => $keterangan_subfile,
                        'nama_subfile' => $nama_file,
                        'tsf_id_file' => $tsf_id_file,
                        ];

                    $this->db->insert('t_subkatalogfile', $data);

                    echo json_encode(['status' => true, 'pesan' => 'File baru berhasil di tambahkan']);
                # code...
            }else{
                
                echo json_encode(['status' => false, 'pesan' => 'Kolom File tidak boleh kosong']);
            }

        }

    }




    public function viewmodaledit($id_katalogfile){
        $data['title'] = 'Edit sub File';
        
        $data['get_file'] = $this->m_data->getedit($id_katalogfile)->row(); 

        $this->load->view('viewtambahan/v_modaledit',$data);
    }


    public function editdata(){

        $this->form_validation->set_rules('keterangan_subfile','Keterangan File','trim|required');
      
        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            if ($_FILES['filenya']['name'] != '') {

                $keterangan_subfile = htmlspecialchars($this->input->post('keterangan_subfile'));
                $filelama = $this->input->post('filelama');
                $nama_subfile = $this->_uploadgambar('filenya');
                $id_subfile = $this->input->post('id_subfile');
                if (file_exists('./assets/gambar/katalog_file/'.$filelama)) {
                    unlink('./assets/gambar/katalog_file/'.$filelama);
                }


                    $data = [
                        'keterangan_subfile' => $keterangan_subfile,
                        'nama_subfile' => $nama_subfile
                        ];

                    $this->db->where('id_subfile', $id_subfile);
                    $this->db->update('t_subkatalogfile', $data);

                    echo json_encode(['status' => true, 'pesan' => 'berhasil di Ubah']);
                # code...
            }else{

                $keterangan_subfile = htmlspecialchars($this->input->post('keterangan_subfile'));
                $id_subfile = $this->input->post('id_subfile');


                    $data = [
                        'keterangan_subfile' => $keterangan_subfile,
                        ];

                    $this->db->where('id_subfile', $id_subfile);
                    $this->db->update('t_subkatalogfile', $data);

                    echo json_encode(['status' => true, 'pesan' => 'File di ubah']);
            }

        }

    }

    public function hapus($id){
        $this->db->where('id_subfile', $id);
        $nama_subfile = $this->db->get('t_subkatalogfile')->row()->nama_subfile;
        if (file_exists('./assets/gambar/katalog_file/'.$nama_subfile)) {
            unlink('./assets/gambar/katalog_file/'.$nama_subfile);
        }


        $this->db->where('id_subfile', $id);
        $result = $this->db->delete('t_subkatalogfile');

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
