<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_struturorg extends CI_Model {
 
    var $table = 't_profileperusahaan'; //nama tabel dari database
    var $column_order = array(null); //field yang ada di table user
    var $column_search = array('judul_slider'); //field yang diizin untuk pencarian 
    var $order = array('id_slider' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function getedit($id_profileperusahaan){
        $this->db->where('id_profileperusahaan', $id_profileperusahaan);
        return $this->db->get($this->table);
    }
 }