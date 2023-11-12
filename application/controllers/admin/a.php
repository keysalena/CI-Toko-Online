<?php

//use PgSql\Result;

class A extends CI_Controller
{
    public function index(){
        // $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view('admin/a');
        // $this->load->view('dashboard', $data);
    }
}