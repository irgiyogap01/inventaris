<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('auth_model');
        
    }
    function index()
    {
        $data['pengguna'] = $this->auth_model->get();
        $this->load->view("layout/header",$data);
        $this->load->view("user/vw_user",$data);
        $this->load->view("layout/footer",$data);
    }
    function tambah()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'bagian' => $this->input->post('bagian'),
        ];
        $this->auth_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Baru Berhasil Ditambah!</div>');
        redirect('User');
        
    }
    public function hapus($id)
	{
		$this->auth_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data User tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data User Berhasil Dihapus!</div>');
		}
		redirect('User');
	}
    
	function edit($id)
	{
			$data['user'] = $this->auth_model->getById($id);
			$this->load->view("layout/header", $data);
			$this->load->view("user/edit_user", $data);
			$this->load->view("layout/footer");
    }

    function update(){
       
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'bagian' => $this->input->post('bagian'),
        ];
            $id = $this->input->post('id');
			$this->auth_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil Diubah!</div>');
			redirect('User');
    }
}