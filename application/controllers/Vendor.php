<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Vendor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('vendor_model');
        
    }
    function index()
    {
        $data['vendor'] = $this->vendor_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("vendor/vw_vendor", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nama_PIC' => $this->input->post('nama_PIC'),
            'noHP' => $this->input->post('noHP'),
        ];
        $this->vendor_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Vendor Baru Berhasil Ditambah!</div>');
        redirect('Vendor');
        
    }
    public function hapus($id)
	{
		$this->vendor_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Vendor tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>DatA Vendor Berhasil Dihapus!</div>');
		}
		redirect('Vendor');
	}
    function edit($id)
	{
			$data['vendor'] = $this->vendor_model->getById($id);
			$this->load->view("layout/header", $data);
			$this->load->view("vendor/edit_vendor", $data);
			$this->load->view("layout/footer");
    }
    function update(){
       
        $data = [
            'nama' => $this->input->post('nama'),
            'nama_PIC' => $this->input->post('nama_PIC'),
            'noHP' => $this->input->post('noHP'),

        ];
            $id = $this->input->post('id');
			$this->vendor_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Vendor Berhasil Diubah!</div>');
			redirect('Vendor');
    }

}