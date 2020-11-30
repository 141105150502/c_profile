<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('model_auth');
	}

	public function index()
	{
		if($this->session->userdata('email')){
		redirect('dashboard');
		}

		$this->load->view('v_login');
	}

	public function register()
	{
		if($this->session->userdata('email')){
		redirect('dashboard');
		}
		$this->load->view('v_register');
	}

	public function ceklogin(){
		// $this->form_validation->set_rules('fieldname', 'fieldlabel', 'trim|required|min_length[5]|max_length[12]');

		$this->_login();

	}

	private function _login(){


		$email = htmlspecialchars($this->input->post('email',true));
		$password = $this->input->post('password');

		$this->db->join('base_user', 'base_user.id_user = base_userrole.ur_id_user', 'left');
		$this->db->where('email', $email);
		$user = $this->db->get('base_userrole')->row_array();
		

		// jika usernya ada
		if ($user) {
			// cek user aktif
			if ($user['user_aktif'] == 1) {
				
				if (password_verify($password, $user['password'])) {
					$data = [
						'id_role' => $user['ur_id_role'],
						'id_user' => $user['id_user'],
						'email' => $user['email'],
						'username' => $user['username']
					];

					$this->session->set_userdata($data);
					echo json_encode(['status'=>true ]);


				}else{

					echo json_encode(['status'=>false, 'pesan' => 'Password Salah']);

				}

			}else{
				echo json_encode(['status'=>false, 'pesan' => 'email Belum Aktif']);
			}
			
		}else{
			echo json_encode(['status'=>false, 'pesan' => 'email atau password Salah']);

		}



	}

	public function prosesregister(){
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('notelp', 'Nomor Telepon', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			echo json_encode(['status'=>false, 'pesan' => validation_errors()]);
		} else {
			$username = htmlspecialchars($this->input->post('username',true));
			$email = htmlspecialchars($this->input->post('email',true));
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT) ;
			$password2 = $this->input->post('password2',true);
			$notelp = htmlspecialchars($this->input->post('notelp',true));

			echo $password;


			$datauser = [
							'username' => $username,
							'email' => $email,
							'password' => $password,
							'no_telp' => $notelp,
							'foto' => 'default.jpg',
							'date_created' => time(),
							'user_aktif' => 1,

						];

			$regis = $this->model_auth->addregister($datauser);

			$idterakhir = $this->db->insert_id();
			$insertrole = ['ur_id_user' => $idterakhir,
							'ur_id_role' => 2,
							];
			$this->db->insert('base_userrole', $insertrole);
			if ($regis) {
				echo json_encode(['status'=>true, 'pesan' => 'Berhasil Registrasi']);
			}else{
				echo json_encode(['status'=>false, 'pesan' => 'gagals']);

			}

		}

	}

	public function blocked(){
		$data['tittle'] = "Access Forbidden";

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_block',$data);
		$this->load->view('backendtemp/footer', $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth','refresh');
	}

	function cek(){
		// echo password_hash('123', PASSWORD_DEFAULT);
		if (!password_verify('user3', '$2y$10$.d70fFqdydMQUggyjsEIwubFM5ZNVhiJ7DPs1RlXBq84LfMCwUrce')) {
			echo 'salah';
		}else{
			echo 'benar';
		}
	}
	
}
