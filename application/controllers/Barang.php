<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('barang_model');
        
    }
    function index()
    {
        $data['barang'] = $this->barang_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_barang", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'pabrik' => $this->input->post('pabrik'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->barang_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Barang Baru Berhasil Ditambah!</div>');
        redirect('Barang');
        
    }
    public function hapus($id)
	{
		$this->barang_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Barang tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>DatA Barang Berhasil Dihapus!</div>');
		}
		redirect('Barang');
	}
    function edit($id)
	{
			$data['barang'] = $this->barang_model->getById($id);
			$this->load->view("layout/header", $data);
			$this->load->view("barang/edit_barang", $data);
			$this->load->view("layout/footer");
    }
    function update(){
       
        $data = [
            'nama' => $this->input->post('nama'),
            'pabrik' => $this->input->post('pabrik'),
            'merek' => $this->input->post('merek'),
            'tipe' => $this->input->post('tipe'),
            'keterangan' => $this->input->post('keterangan'),
        ];
            $id = $this->input->post('kode_barang');
			$this->barang_model->update(['kode_barang' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Diubah!</div>');
			redirect('Barang');
    }

}
