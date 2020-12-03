<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sejarah extends CI_Model {
 
    var $table = 'tabelmu'; //nama tabel dari database
    var $column_order = array(null,'field_tabel',null); //field yang ada di table user
    var $column_search = array('field_tabel'); //field yang diizin untuk pencarian 
    var $order = array('di_table' => 'asc'); // default order 

 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 

    public function prosestambah($data){
        $this->db->insert('tabelmu', $data);
    }

    public function prosesedit($id_profileperusahaan,$data){
        $this->db->where('id_profileperusahaan', $id_profileperusahaan);
        $this->db->update('t_profileperusahaan', $data);
    }
 }