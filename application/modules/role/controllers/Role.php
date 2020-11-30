<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_role','datamodel');
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
            $row[] = $field->nama_role;
            
       		$row[] = '<button type="button" class="btn btn-sm btn-warning" onclick="accessuser('.$field->role_id.')"><i class="fas fa-user-tie"></i></button>
                        <button type="button" class="btn btn-sm btn-danger" onclick="hapusrole('.$field->role_id.')"><i class="fas fa-trash-alt" "></i></button>
					   <button type="button" class="btn btn-sm  btn-warning" onclick=editmodal('.$field->role_id.')><i class="fas fa-edit"></i></button>';
 			
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

    public function tambahrole(){
    	$this->form_validation->set_rules('role', 'role', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	$role = $this->input->post('role');
	    	$data = ['nama_role' => $role];
	    	$this->db->insert('t_role', $data);
    		echo json_encode(['status' => true, 'pesan' => 'role baru berhasil di tambahkan']);

    		
    	}
    }

    public function editrole(){
    	$this->form_validation->set_rules('role', 'role', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	$role = $this->input->post('role');
	    	$role_id = $this->input->post('role_id');
	    	$data = ['nama_role' => $role];
	    	$this->db->where('role_id', $role_id);
	    	$this->db->update('t_role', $data);
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

    public function viewmodalaccess($role_id){
        $data['title'] = 'Acess role';
        $data['role_id'] = $role_id;
    
        $this->db->where('menu_id !=', 1);
        $this->db->where('menu_id !=', 2);
        $data['menu'] = $this->db->get('t_menu')->result();

        $this->load->view('viewtambahan/v_modal_access',$data);
    }

    public function ubahaccess(){
        $menu_id = $this->input->post('menu_id');
        $role_id = $this->input->post('role_id');

        $this->db->where('tmau_role_id', $role_id);
        $this->db->where('tmau_menu_id', $menu_id);
        $result = $this->db->get('t_menu_access_user');

        if($result->num_rows() == 1){
           
            $this->db->where('tmau_role_id', $role_id);
            $this->db->where('tmau_menu_id', $menu_id);
            $this->db->delete('t_menu_access_user');

        }else{
            $data = ['tmau_role_id' => $role_id,
                    'tmau_menu_id' => $menu_id];
            $this->db->insert('t_menu_access_user', $data); 
        }


    }



    





    // viewmodaledit

   

}





