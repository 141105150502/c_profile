<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_menu extends MX_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_menu','m_menu');
        cek_login();
        
    }
 


	public function index()
	{
		// $this->load->view('welcome_message');
		$data['tittle'] = "Management Menu";
		// data
		// enddata

		$this->load->view('backendtemp/header', $data);
		$this->load->view('backendtemp/sidebar', $data);
		$this->load->view('v_managementmenu');
		$this->load->view('backendtemp/footer', $data);
	}



	 function get_data_submenu()
    {
        $list = $this->m_menu->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_menu;
            if ($field->parent_menu == 0) {
            	$parent = ' - ';
            }else{
		        $parent = $this->db->get_where('base_menu',['id_menu' => $field->parent_menu])->row()->nama_menu;

            }
            $row[] = $parent;
            $row[] = $field->url;
            $row[] = $field->icon;
            if ($field->menu_aktif == 0) {
            	$aktif = '<span class="badge badge-danger">Non Aktif</span>';
            }else{
            	$aktif = '<span class="badge badge-success">Aktif</span>';

            }
            $row[] = $aktif;
            $row[] = '<button type="button" class="btn btn-sm btn-danger" onclick="hapussubmenu('.$field->id_menu.')"><i class="fas fa-trash-alt"></i></button>
					  <button type="button" class="btn btn-sm  btn-warning" onclick="editmodal('.$field->id_menu.')"><i class="fas fa-edit"></i></button>';
 			
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->m_menu->count_all(),
            "recordsFiltered" => $this->m_menu->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function viewmodaladd(){
        $data['title'] = 'Tambah Menu';
        // $data['menu'] = $this->db->get('t_menu')->result();
        $this->db->where('parent_menu', 0);
        $data['parent_menu'] = $this->db->get('base_menu')->result();
        $this->load->view('viewtambahan/v_modaltambah',$data);
    }

    public function savemenu(){

        $this->form_validation->set_rules('nama_menu','Nama Menu','required');
        $this->form_validation->set_rules('icon', 'Icon', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        $this->form_validation->set_rules('icon', 'Icon', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            $nama_menu = htmlspecialchars($this->input->post('nama_menu'));
            $parent_menu =$this->input->post('parent_menu');
            $url = htmlspecialchars($this->input->post('url'));
            $icon = htmlspecialchars($this->input->post('icon'));
            $aktif = htmlspecialchars($this->input->post('menu_aktif'));

            $data = [
                'parent_menu' => $parent_menu,
                'nama_menu' => $nama_menu,
                'url' => $url,
                'icon' => $icon,
                'menu_aktif' => $aktif,
                ];

            $this->db->insert('base_menu', $data);

            echo json_encode(['status' => true, 'pesan' => 'Menu berhasil di tambahkan']);

        }

    }




    public function viewmodaledit($id_menu){
        $data['title'] = 'Edit Menu';
        $data['menu'] = $this->db->get('base_menu')->result();
        $this->db->where('parent_menu', 0);
        $data['parent_menu'] = $this->db->get('base_menu')->result();

        $data['get_menu'] = $this->m_menu->getedit($id_menu)->row(); 

        $this->load->view('viewtambahan/v_modaledit',$data);
    }

     public function editmenu(){
        // echo $this->input->post('menu_aktif');
        // echo $this->input->post('parent_menu');

        $this->form_validation->set_rules('icon', 'Icon', 'trim|required');
        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');
        $this->form_validation->set_rules('icon', 'Icon', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo json_encode(['status' => false, 'pesan' => validation_errors()]);
        } else {
            # code...
            $id_menu = $this->input->post('id_menu');
            $nama_menu = htmlspecialchars($this->input->post('nama_menu'));
            $parent_menu =$this->input->post('parent_menu');
            $url = htmlspecialchars($this->input->post('url'));
            $icon = htmlspecialchars($this->input->post('icon'));
            $menu_aktif = htmlspecialchars($this->input->post('menu_aktif'));

            $data = [
                'parent_menu' => $parent_menu,
                'nama_menu' => $nama_menu,
                'url' => $url,
                'icon' => $icon,
                'menu_aktif' => $menu_aktif,
                ];

            $this->db->where('id_menu', $id_menu);
            $this->db->update('base_menu', $data);

            echo json_encode(['status' => true, 'pesan' => 'Sub menu berhasil di Ubah']);

        }

    }

    public function hapus($id){
        $this->db->where('id_menu', $id);
        $result = $this->db->delete('base_menu');

        if ($result) {
            echo json_encode(['status' => true, 'pesan' => 'Menu Berhasil Terhapus']);
        }else{

            echo json_encode(['status' => false, 'pesan' => 'Maaf terhjadi kesalahan']);
        }
    }

}
