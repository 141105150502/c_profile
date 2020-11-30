<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_role extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_role','datamodel');

		cek_login();

		
	}

	public function index()
	{
		$data['tittle'] = "Management Role";

		// data
		$data['role']= $this->db->get('base_role')->result();
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_role',$data);
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
            $row[] = $field->nama_role;
            
       		$row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapusdata('.$field->id_role.')"><i class="fas fa-trash-alt" "></i></button>
                      <button type="button" class="btn btn-sm btn-success" onclick="modalhakaccess('.$field->id_role.')"><i class="fas fa-user" "></i></button>
					  <button type="button" class="btn btn-sm  btn-warning" onclick=editmodal('.$field->id_role.')><i class="fas fa-edit"></i></button>';
 			
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
    	$data['title'] = 'Tambah Role';
    	$this->load->view('viewtambahan/v_modaltambah',$data);
    }

    public function tambahdata(){
    	$this->form_validation->set_rules('role', 'role', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {

	    	$role = $this->input->post('role');
	    	$data = ['nama_role' => $role];

            $this->datamodel->insertdata($data);

    		echo json_encode(['status' => true, 'pesan' => 'role baru berhasil di tambahkan']);
    	}
    }

    public function editdata(){
    	$this->form_validation->set_rules('role', 'role', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	// $role = $this->input->post('role');
	    	$id_data = $this->input->post('id_role');

	    	$data = ['nama_role' => $this->input->post('role')];

            $this->datamodel->updatedata($id_data, $data);

	    	
    		echo json_encode(['status' => true, 'pesan' => 'Role berhasil di ubah']);

    		
    	}
    }


    public function hapus($id){
    	// echo $id;
    	// echo $this->input->post('id_role');
    	$this->db->where('id_role', $id);
    	$result = $this->db->delete('base_role');

    	if ($result) {
    		echo json_encode(['status' => true, 'pesan' => 'Data Berhasil Teerhapus']);
    	}else{

    		echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
    	}
    }

    public function viewmodaledit($id_role){
    	$data['title'] = 'Edit Role';
    	$data['result'] = $this->db->get_where('base_role',['id_role' => $id_role])->row();

    	$this->load->view('viewtambahan/v_modaledit',$data);
    }





    // viewmodaledit

    public function viewmodalhakaccess($id_role){
        $data['title'] = 'Ubah Hak Access';
        $data['id_role'] = $id_role;
        $data['menu'] = $this->db->get('base_menu')->result();
        $this->load->view('viewtambahan/v_modalhakaccess',$data);
    }

    public function hakaccess(){
       $menu = $this->db->get('base_menu')->result();  

       foreach ($menu as $m) {
           echo $this->input->post('menu'.$m->id_menu);
           echo $this->input->post('cek'.$m->id_menu);
           echo '/';
       }
   }


     public function ubahakccess(){
        $id_menu = $this->input->post('id_menu');
        $id_role = $this->input->post('id_role');

        $this->db->where('mr_id_role', $id_role);
        $this->db->where('mr_id_menu', $id_menu);
        $result = $this->db->get('base_menurole');

        if($result->num_rows() == 1){
           
            $this->db->where('mr_id_role', $id_role);
            $this->db->where('mr_id_menu', $id_menu);
            $this->db->delete('base_menurole');

            echo json_encode(['status' => true, 'pesan' => 'Hak Kases berhasil di ubah']);

        }else{
            $data = ['mr_id_role' => $id_role,
                    'mr_id_menu' => $id_menu];
            $this->db->insert('base_menurole', $data); 
            echo json_encode(['status' => true, 'pesan' => 'Hak Kases berhasil di ubah']);

        }
    }


   

}





