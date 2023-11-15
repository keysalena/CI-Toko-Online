<?php

//use PgSql\Result;

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != 2) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
Belum Login!!              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ');

            // Redirect to login or another page if the condition is not met
            redirect('auth/login');
        }
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
        redirect('welcome');
    }
    public function detail_keranjang()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('keranjang');
    }
    public function hapus()
    {
        $this->cart->destroy();
        redirect('welcome');
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
    public function bayar()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('bayar');
    }
    public function proses()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/footer');
            $this->load->view('proses');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses";
        }
    }
    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail($id_brg);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        $this->load->view('detail_barang', $data);
    }
}
