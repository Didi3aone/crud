<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    
    function construct()
    {
    	parent::__construct();
    	$this->load->model('Model_mahasiswa');
    	$this->load->helper('url');
    }

    // fungsi untuk menampilkan seluruh data di view
	public function index()
	{
        $this->load->model('Model_mahasiswa');// karena versi 3.1.5 load model harus di function nya langsung 
		$data['judul']     = 'Data Mahasiswa';
		$data['mahasiswa'] = $this->Model_mahasiswa->get();
		$this->load->view('crud_view', $data);
	}
    //fungsi tambah data
	function add_data()
    {
        $this->load->model('Model_mahasiswa');// karena versi 3.1.5 load model harus di function nya langsung 
    	$this->load->library('form_validation');
        $this->form_validation->set_rules('npm','Npm','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        if ( $this->form_validation->run() == FALSE ) 
        {
           $this->load->view('crud_add');
        }
        else {
            $params['npm']    = $this->input->post('npm');
            $params['nama']   = $this->input->post('nama');
            $params['email']  = $this->input->post('email');
            $params['alamat'] = $this->input->post('alamat');
            $this->Model_mahasiswa->add_data($params);

            $data['alert'] = 'sukses tambah data';
            $this->load->view('crud_add',$data);
        }
         // $this->load->view('crud_add');
    }

    function edit()
    {
        $this->load->model('Model_mahasiswa');
        $update['npm'] = $this->input->post('npm');
        $data['nama']  = $this->input->post('nama');
        $data['email'] = $this->input->post('email');
        $data['alamat']= $this->input->post('alamat');

        $this->Model_mahasiswa->update($data,$update);
        $data['alert'] = 'sukses edit data';
        $this->load->view('crud_view',$data);
    }

    function delete($id)
    {
        $this->load->model('Model_mahasiswa');
        $data['id'] = $this->Model_mahasiswa->delete($id);
        $data['msg'] = 'sukses hapus data';
        $this->load->view('crud_view',$data);
    }
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */





