<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class visimisi extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_data','datamodel');
		cek_login();
		
	}

	public function index()
	{
		$data['tittle'] = "Role";

		// data
		// $data['role']= $this->db->get('t_role')->result();
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_role',$data);
		$this->load->view('backendtemp/footer', $data);
	}


	function get_data_role()
    {
        $list = $this->datamodel->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->name_field;
            
       		$row[] = ' <button type="button" class="btn btn-sm btn-danger" onclick="hapusrole('.$field->id_tabelmu.')"><i class="fas fa-trash-alt" "></i></button>
					   <button type="button" class="btn btn-sm  btn-warning" onclick=editmodal('.$field->id_tabelmu.')><i class="fas fa-edit"></i></button>';
 			
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
    	$data['title'] = 'title modal';
    	$this->load->view('viewtambahan/v_modaltambah',$data);
    }

    public function tambah(){
    	$this->form_validation->set_rules('role', 'role', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	$datapos1 = $this->input->post('nameinput1',true);
	    	$data = ['fieldmu' => $datapos1];
            $this->datamodel->prosestambah($data);

    		echo json_encode(['status' => true, 'pesan' => 'role baru berhasil di tambahkan']);

    		
    	}
    }

    public function editrole(){
    	$this->form_validation->set_rules('role', 'role', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	$datapos1 = $this->input->post('nameinput1');
	    	$id_nameinput = $this->input->post('id_nameinput');
	    	$data = ['nama_role' => $role];
	    	$this->datamodel->prosestambah($id_nameinput, $data);
    		echo json_encode(['status' => true, 'pesan' => 'Role berhasil di Ubah']);

    		
    	}
    }


    public function hapus($id){
    	$this->db->where('role_id', $id);
    	$result = $this->db->delete('t_role');

    	if ($result) {
    		echo json_encode(['status' => true, 'pesan' => 'Data berhasil dihapus']);
    	}else{
    		echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
    	}
    }

    public function viewmodaledit($role_id){
    	$data['title'] = 'Edit role';
    	$data['result'] = $this->db->get_where('t_role',['role_id' => $role_id])->row();

    	$this->load->view('viewtambahan/v_modaledit',$data);
    }


    // viewmodaledit

   

}





