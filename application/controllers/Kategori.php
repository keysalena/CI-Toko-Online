<?php

class Kategori extends CI_Controller
{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('kategori/elektronik', $data);
    }
    public function pakaian_anak()
    {
        $data['pakaian_anak'] = $this->model_kategori->pakaian_anak()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('kategori/pakaian_anak', $data);
    }
    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->pakaian_pria()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('kategori/pakaian_pria', $data);
    }
    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->pakaian_wanita()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('kategori/pakaian_wanita', $data);
    }
    public function peralatan_olahraga()
    {
        $data['peralatan_olahraga'] = $this->model_kategori->peralatan_olahraga()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('kategori/peralatan_olahraga', $data);
    }
    public function dashboard()
    {
        $data['barang'] = $this->model_kategori->dashboard()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('kategori/dashboard', $data);
    }
}