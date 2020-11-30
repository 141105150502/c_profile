<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_berita extends MX_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_kategoriberita','datamodel');
		cek_login();
		
	}

	public function index()
	{
		$data['tittle'] = "Kategori Berita";

		// data
		// $data['role']= $this->db->get('t_role')->result();
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar',$data);
		$this->load->view('v_kategoriberita',$data);
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
            $row[] = $field->kategori_berita;
            
       		$row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapusdata('.$field->id_kategoriberita.')"><i class="fas fa-trash-alt" "></i></button>
					   <button type="button" class="btn btn-sm  btn-warning" onclick=editmodal('.$field->id_kategoriberita.')><i class="fas fa-edit"></i></button>';
 			
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
    	$data['title'] = 'Tambah Kategori Berita';
    	$this->load->view('viewtambahan/v_modaltambah',$data);
    }

    public function tambahdata(){
    	$this->form_validation->set_rules('kategori_berita', 'Kategori Berita', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	$kategori_berita = $this->input->post('kategori_berita');
	    	$data = ['kategori_berita' => $kategori_berita];
	    	$this->db->insert('t_kategoriberita', $data);
    		echo json_encode(['status' => true, 'pesan' => 'kategori Berita baru berhasil di tambahkan']);

    		
    	}
    }

    public function editdata(){
    	$this->form_validation->set_rules('kategori_berita', 'Kategori Berita', 'trim|required');
    	if ($this->form_validation->run() == false) {
    		echo json_encode(['status' => false, 'pesan' => validation_errors()]);
    	} else {
	    	$kategori_berita = $this->input->post('kategori_berita');
	    	$id_kategoriberita = $this->input->post('id_kategoriberita');
	    	$data = ['kategori_berita' => $kategori_berita];
	    	$this->db->where('id_kategoriberita', $id_kategoriberita);
	    	$this->db->update('t_kategoriberita', $data);
    		echo json_encode(['status' => true, 'pesan' => 'Kategori Berita berhasil di Ubah']);

    		
    	}
    }


    public function hapus($id_kategoriberita){
    	$this->db->where('id_kategoriberita', $id_kategoriberita);
    	$result = $this->db->delete('t_kategoriberita');

    	if ($result) {
    		echo json_encode(['status' => true, 'pesan' => 'Data berhasil dihapus']);
    	}else{
    		echo json_encode(['status' => false, 'pesan' => 'Maaf terjadi kesalahan']);
    	}
    }

    public function viewmodaledit($id_kategpriberita){
    	$data['title'] = 'Edit role';
    	$data['result'] = $this->db->get_where('t_kategoriberita',['id_kategoriberita' => $id_kategpriberita])->row();

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





