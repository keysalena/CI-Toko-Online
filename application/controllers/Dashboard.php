<?php

//use PgSql\Result;

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('kategori/dashboard', $data);
    }
    public function tambah_keranjang($id_brg)
    {
        $barang = $this->model_barang->find($id_brg);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang,
            'stok'    => $barang->stok,
        );

        $this->cart->insert($data);
        redirect('dashboard');
    }
    public function detail_keranjang(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('keranjang');
    }
    public function hapus(){
        $this->cart->destroy();
        redirect('dashboard');
    }
    public function hapus_id($id)
    {
        $cart_content = $this->cart->contents();
    
        foreach ($cart_content as $item) {
            if ($item['id'] == $id) {
                $data = array('rowid' => $item['rowid'], 'qty' => 0);
                $this->cart->update($data);
                break;
            }
        }
    
        redirect('dashboard/detail_keranjang');
    }
    public function bayar(){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('bayar');
    }
    public function proses(){
        $is_processed = $this->model_invoice->index();
        if($is_processed){
        $this->cart->destroy();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('proses');
        }else{
            echo "Maaf, Pesanan Anda Gagal diproses";
        }
    }
    public function detail($id_brg){
        $data['barang'] = $this->model_barang->detail($id_brg);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('detail_barang', $data);
    }
}
