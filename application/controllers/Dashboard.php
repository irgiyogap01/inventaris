<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        
    }
    function index()
    {
        
        $this->load->view("layout/header");
        $this->load->view("dashboard/vw_dashboard");
        $this->load->view("layout/footer");
    }
}