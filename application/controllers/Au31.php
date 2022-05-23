<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Au31 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('au31_model');
        
    }
    function index()
    {
        $data['au31'] = $this->au31_model->get();
        $this->load->view("layout/header",$data);
        $this->load->view("au31/vw_au31",$data);
        $this->load->view("layout/footer",$data);
    }
    function tambah()
    {
        $data = [
            'no_au31' => $this->input->post('no_au31'),
            'keterangan' => $this->input->post('keterangan'),
            'no_paket' => $this->input->post('no_paket'),
            'nama_pekerjaan' => $this->input->post('nama_pekerjaan'),
            'triwulan' => $this->input->post('triwulan'),
            'document' => $this->input->post('exampleInputFile'),
        ];
        $this->au31_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Au-31 Baru Berhasil Ditambah!</div>');
        redirect('Au31');
        
    }
    public function hapus($id)
	{
		$this->au31_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Au-31 tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Au-31 Berhasil Dihapus!</div>');
		}
		redirect('Au31');
	}

    function edit($id)
	{
			$data['au31'] = $this->au31_model->getById($id);
			$this->load->view("layout/header", $data);
			$this->load->view("au31/edit_au31", $data);
			$this->load->view("layout/footer");
    }

    function update(){
       
        $data = [
            'no_au31' => $this->input->post('no_au31'),
            'keterangan' => $this->input->post('keterangan'),
            'no_paket' => $this->input->post('no_paket'),
            'nama_pekerjaan' => $this->input->post('nama_pekerjaan'),
            'triwulan' => $this->input->post('triwulan'),
        ];
            $id = $this->input->post('id');
			$this->au31_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data AU31 Berhasil Diubah!</div>');
			redirect('Au31');
    }
}