<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_user extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_alluser','datamodel');

		cek_login();

		
	}

	public function index()
	{
		$data['tittle'] = "All User";

		// data
		// $data['role']= $this->db->get('base_role')->result();
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_alluser',$data);
		$this->load->view('backendtemp/footer', $data);
	}


	function get_data()
    {
        $list = $this->datamodel->get_datatables();
        // var_dump($list);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->username;
            $row[] = $field->email;
            $row[] = $field->no_telp;
            $row[] = $field->pekerjaan;

            $row[] = $field->nama_role;
            
       		$row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapusdata('.$field->id_user.')"><i class="fas fa-trash-alt" "></i></button>
					  <button type="button" class="btn btn-sm  btn-warning" onclick=editmodal('.$field->id_user.')><i class="fas fa-edit"></i></button>';
 			
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
    	$data['title'] = 'Tambah User';
    	$this->load->view('viewtambahan/v_modaltambah',$data);
    }

    public function tambahdata(){
    	$this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Retype Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
        $this->form_validation->set_rules('user_aktif', 'User Aktif', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {

            if (empty($_FILES['foto']['name'])) {
                $namafile = 'default.jpg';
                
            }else{
                $namafile = $this->_uploadfile('foto');
            }

	    	$data = [
                'username' => $this->input->post('username',true),
                'email' => $this->input->post('email',true),
                'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT),
                'no_telp' => $this->input->post('username',true),
                'pekerjaan' => $this->input->post('pekerjaan',true),
                'user_aktif' => $this->input->post('user_aktif',true),
                'date_created' => time(),
                'foto' => $namafile
                ];


            $this->datamodel->insertdata($data);
            $lastiduser = $this->db->insert_id();
            $datauserrole = ['ur_id_user' => $lastiduser,
                        'ur_id_role' => 2];
            $this->db->insert('base_userrole',$datauserrole);

    		echo json_encode(['status' => true, 'pesan' => 'User baru berhasil di tambahkan']);
    	}
    }

    public function editdata(){
    	// $this->form_validation->set_rules('role', 'role', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password2]');
        $this->form_validation->set_rules('password2', 'Retype Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|required');
        $this->form_validation->set_rules('user_aktif', 'User Aktif', 'trim|required');

        // awal
        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {

            if (empty($_FILES['foto']['name'])) {
                $namafile = $this->input->post('old_foto');
                
            }else{
                $namafile = $this->_updateuploadfile('foto');
            }

             $id_user = $this->input->post('id_user');


            $this->db->set('username', $this->input->post('username',true));
            $this->db->set('email', $this->input->post('email',true));
            $this->db->set('password', password_hash($this->input->post('password',true), PASSWORD_DEFAULT));
            $this->db->set('no_telp', $this->input->post('no_telp',true));
            $this->db->set('user_aktif', $this->input->post('user_aktif',true));
            $this->db->set('foto', $namafile);
            $this->db->set('pekerjaan', $this->input->post('pekerjaan',true));

            // $this->datamodel->updatedata($id_data, $data);
            $this->db->where('id_user', $id_user);
            $this->db->update('base_user');

            $id_role = $this->input->post('role');
            // $this->db->set('ur_id_user',$id_user);
            $this->db->set('ur_id_role',$id_role);
            $this->db->where('ur_id_user', $id_user);

            $this->db->update('base_userrole');

            echo json_encode(['status' => true, 'pesan' => 'role baru berhasil di ubah']);
        }
     
    }


    public function hapus($id){
    	// echo $id;
    	// echo $this->input->post('id_role');
        $result = $this->datamodel->deletedata($id);
    	

    	if ($result) {
    		echo json_encode(['status' => true, 'pesan' => 'Data Berhasil Teerhapus']);
    	}else{

    		echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
    	}
    }

    public function viewmodaledit($id_user){
    	$data['title'] = 'Edit Role';
        $this->db->join('base_userrole', 'base_userrole.ur_id_user = base_user.id_user', 'left');
    	$data['result'] = $this->db->get_where('base_user',['id_user' => $id_user])->row();

    	$this->load->view('viewtambahan/v_modaledit',$data);
    }





    // viewmodaledit

    public function viewmodalhakaccess($id_role){
        $data['title'] = 'Ubah Hak Access';
        $data['id_role'] = $id_role;
        $data['menu'] = $this->db->get('base_menu')->result();
        $this->load->view('viewtambahan/v_modalhakaccess',$data);
    }


    private function _uploadfile($userfile){
        $config['upload_path'] = './assets/gambar/userimage/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($userfile)){
            // $error = array('error' => $this->upload->display_errors());
            return $this->upload->display_errors();
        }
        else{
            // $data = array('upload_data' => $this->upload->data('file_name'));
            // echo "success";
            return $this->upload->data('file_name');
        }
    }



      

    private function _updateuploadfile($userfile){
        $old_foto = $this->input->post('old_foto');
        $config['upload_path'] = './assets/gambar/userimage/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload($userfile)){
            // $error = array('error' => $this->upload->display_errors());
            return $this->upload->display_errors();
        }
        else{
           if (file_exists('./assets/gambar/userimage/'.$old_foto)) {
                if ($old_foto != 'default.jpg') {
                    unlink('./assets/gambar/userimage/'.$old_foto);
                }
            }

            return $this->upload->data('file_name');

        }
    }
   

}





