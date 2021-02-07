<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profileuser extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_profileuser');

		cek_login();
		

	}

	public function index()
	{
		$data['tittle'] = "Profile";
		

		$this->db->join('base_role', 'base_role.id_role = base_userrole.ur_id_role', 'left');
		$this->db->join('base_user', 'base_user.id_user = base_userrole.ur_id_user', 'left');
		$this->db->where('email', $this->session->userdata('email'));
		$data['resultuser'] = $this->db->get('base_userrole')->row();


		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_profileuser',$data);
		$this->load->view('backendtemp/footer', $data);
	}


	public function modaledit(){
		$this->db->join('base_role', 'base_role.id_role = base_userrole.ur_id_role', 'left');
		$this->db->join('base_user', 'base_user.id_user = base_userrole.ur_id_user', 'left');
		$this->db->where('email', $this->session->userdata('email'));
		$data['datauser'] = $this->db->get('base_userrole')->row();
		$this->load->view('v_kontenubahprofile', $data);
	}

	public function editprofile(){
		if ($_FILES['foto']['name'] != '') {
		
			$old_foto = $this->input->post('old_foto');
			$namafoto = $this->do_upload('foto', $old_foto);

			$id = $this->input->post('id_user');

			$data['username'] = $this->input->post('username');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['foto'] = $namafoto;
			$data['pekerjaan'] = $this->input->post('pekerjaan');

			$this->model_profileuser->updatewithfoto($id,$data);
		
			$this->unsetsessionnya();
 	
			echo json_encode(['status' => true, 'pesan' => 'Berhasil Di Ubah']);


		}else{
			$id = $this->input->post('id_user');

			
			$data['username'] = $this->input->post('username');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['pekerjaan'] = $this->input->post('pekerjaan');

			$this->model_profileuser->updatenofoto($id,$data);

			$this->unsetsessionnya();


			echo json_encode(['status' => true, 'pesan' => 'Berhasil Di Ubah']);

		}

	}


	private function do_upload($nameinput, $old_foto){

		
        $nmfile = "foto_".time(); //nama file + fungsi time

		$config['upload_path'] = './assets/gambar/userimage';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '2000';
		$config['max_width']  = '1800';
		$config['max_height']  = '1800';
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload($nameinput)){


			return $this->upload->display_errors();
		}
		else{

			if (file_exists('./assets/gambar/userimage/'.$old_foto)) {
				if ($old_foto != 'default.jpg') {
					unlink('./assets/gambar/userimage/'.$old_foto);
				}
			}

			   $gbr = $this->upload->data();
                    //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/gambar/userimage/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 225;
                $config['height']= 225;
                $config['new_image']= './assets/gambar/userimage/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar_berita = $gbr['file_name'];

                return $gambar_berita;

			// return $this->upload->data('file_name');

		}

	}




	private function unsetsessionnya(){
		$this->session->unset_userdata('username');
		$username = $this->db->get_where('base_user',['id_user' => $this->session->userdata('id_user')])->row()->username;

		$sess = array(
			'username' => $username
		);
		
		$this->session->set_userdata($sess);
		
	}




	public function ubahpassword(){
		$this->form_validation->set_rules('passwordsaatini','Password saat ini','required');
        $this->form_validation->set_rules('passwordbaru', 'Password Baru', 'trim|required|matches[passwordbaru2]');
        $this->form_validation->set_rules('passwordbaru2', 'Retype password baru', 'trim|required|matches[passwordbaru]');
 
        // $this->form_validation->set_rules('aktif', 'Aktif', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);

        } else {
        	$passwordsaatini = $this->input->post('passwordsaatini',true);
        	$passwordbaru = $this->input->post('passwordbaru',true);

        	$user = $this->db->get_where('base_user',['email' => $this->session->userdata('email')])->row();

        	if (!password_verify($passwordsaatini,$user->password)) {
        		// echo "password salah";
	            echo json_encode(['status' => false, 'pesan' => 'Password saat ini tidak sesuai']);

        	}else{
        		if ($passwordsaatini == $passwordbaru ) {
		            echo json_encode(['status' => false, 'pesan' => 'password baru tidak boleh sama dengan password yang lama']);
        		}else{
        			$this->db->set('password', password_hash($passwordbaru, PASSWORD_DEFAULT) );
        			$this->db->where('email', $this->session->userdata('email'));
        			$this->db->update('base_user');

		            echo json_encode(['status' => true, 'pesan' => 'Password berhasil di ubah']);


        		}

        	}

        }

	}
}
