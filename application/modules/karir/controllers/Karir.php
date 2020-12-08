<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_karir','datamodel');
		cek_login();
		
	}

	public function index()
	{
		$data['tittle'] = "karir";

		// data
		// $data['role']= $this->db->get('t_role')->result();
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_karir',$data);
		$this->load->view('backendtemp/footer', $data);
	}


	function get_data()
    {
        $list = $this->datamodel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->posisi_karir;
            $row[] = $field->deskripsi_karir;
            
       		$row[] = ' <button type="button" class="btn btn-sm btn-danger" onclick="hapuskarir('.$field->id_karir.')"><i class="fas fa-trash-alt" "></i></button>
					   <button type="button" class="btn btn-sm  btn-warning" onclick=editmodal('.$field->id_karir.')><i class="fas fa-edit"></i></button>';
 			
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->datamodel->count_all(),
            "recordsFiltered" => $this->datamodel->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function viewmodaladd(){
    	$data['title'] = 'tambah Loeongan kerja';
    	$this->load->view('viewtambahan/v_modaltambah',$data);
    }

    public function tambahdata(){
    	$this->form_validation->set_rules('posisi_karir', 'Posisis Karir', 'trim|required');
        $this->form_validation->set_rules('deskripsi_karir', 'Deskripsi Karir', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	$posisi_karir = $this->input->post('posisi_karir',true);
            $deskripsi_karir = $this->input->post('deskripsi_karir',true);
	    	$data = [
                    'posisi_karir' => $posisi_karir,
                    'deskripsi_karir' => $deskripsi_karir
                    ];
            $this->datamodel->prosestambah($data);

    		echo json_encode(['status' => true, 'pesan' => 'Data karir berhasil di tambahkan']);

    		
    	}
    }

    public function viewmodaledit($id_karir){
    	$data['title'] = 'Edit Karir / Lowongan Kerja';
    	$data['result'] = $this->db->get_where('t_karir',['id_karir' => $id_karir])->row();

    	$this->load->view('viewtambahan/v_modaledit',$data);
    }

    public function editkarir(){
        $this->form_validation->set_rules('posisi_karir', 'Posisis Karir', 'trim|required');
        $this->form_validation->set_rules('deskripsi_karir1', 'Deskripsi Karir', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
            $id_karir = $this->input->post('id_karir',true);
	    	$posisi_karir = $this->input->post('posisi_karir',true);
	    	$deskripsi_karir1 = $this->input->post('deskripsi_karir1',true);
	    	$data = [
                    'posisi_karir' => $posisi_karir,
                    'deskripsi_karir' => $deskripsi_karir1,
                    ];
	    	$this->datamodel->prosesedit($id_karir, $data);
          
    		echo json_encode(['status' => true, 'pesan' => 'Data Karir berhasil di Ubah']);

    		
    	}
    }


    public function hapus($id){
    	$this->db->where('id_karir', $id);
    	$result = $this->db->delete('t_karir');

    	if ($result) {
    		echo json_encode(['status' => true, 'pesan' => 'Data karir berhasil dihapus']);
    	}else{
    		echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
    	}
    }



    // viewmodaledit

   

}





