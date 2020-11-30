<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_alluser extends CI_Model {
 
    var $table = 'base_user'; //nama tabel dari database
    var $column_order = array(null,'username',null); //field yang ada di table user
    var $column_search = array('username'); //field yang diizin untuk pencarian 
    var $order = array('id_user' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }
 
    private function _get_datatables_query()
    {
        // $this->db->where('id_role !=', 1);
        $this->db->group_by('id_user');
        $this->db->join('base_user','base_user.id_user = base_userrole.ur_id_user', 'left');
        $this->db->join('base_role','base_role.id_role = base_userrole.ur_id_role', 'left');
        $this->db->from('base_userrole');
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function insertdata($data){

       return $this->db->insert($this->table,$data);

    }

    // public function updatedata($id_data, $data){
    //     $this->db->where('id_user', $id_data);
    //     return $this->db->update($this->table, $data);
    // }

    public function deletedata($id){
        $this->db->where('id_user', $id);
        return $this->db->delete($this->table);
    }
 }