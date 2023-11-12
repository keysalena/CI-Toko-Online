<?php

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view('admin/invoice', $data);
    }
    public function detail($id_invoice){
        $data['invoice'] = $this->model_invoice->id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->id_pesanan($id_invoice);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view('admin/detail', $data);
    }
}