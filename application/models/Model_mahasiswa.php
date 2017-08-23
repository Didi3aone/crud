<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}	
    
    
     // Fungsi untuk ambil semua data mahasiswa
    function get()
    {
    	$this->db->select('*');
    	$this->db->from('mahasiswa');
    	$result = $this->db->get();
        
        return $result->result();
    }

    //fungsi filter by npm
    function get_npm($npm)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('npm', $npm);
        return $this->db->get();
    }

    //fungsi untuk tambah data mahasiswa
    
    function add_data($data)
    {
    	$this->db->insert('mahasiswa',$data);
    }

    function update($data, $update)
    {
        $this->db->where($update);
        return $this->db->update('mahasiswa',$data);
    }

    function delete($id)
    {
    	$this->db->where('id',$id);
    	$this->db->delete('mahasiswa');
    }
}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */