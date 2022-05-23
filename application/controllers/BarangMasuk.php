<?php
defined('BASEPATH') or exit('No direct script access allowed');
class BarangMasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
    }
    function index()
    {
        
        $this->load->view("layout/header");
        $this->load->view("barang_masuk/vw_barang_masuk");
        $this->load->view("layout/footer");
    }
    function Haltambah(){
        $this->load->view("layout/header");
        $this->load->view("barang_masuk/input_barang_masuk");
        $this->load->view("layout/footer");
    }
}