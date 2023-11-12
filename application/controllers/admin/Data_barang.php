<?php

class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_barang = $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];

        if ($gambar != '') {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload!!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tbl_barang');
        redirect('admin/data_barang/index');
    }

    public function edit_aksi($id_brg)
    {
        $id_brg = $this->input->post('id_brg');
        $nama_barang = $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $data = array(
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            // 'gambar' => $gambar
        );

        $where = array(
            'id_brg' => $id_brg
        );

        // Add processing for image if needed

        $this->model_barang->edit_barang($where, $data, 'tbl_barang');
        redirect('admin/data_barang/index');
    }
    public function hapus_aksi($id_brg)
    {
        $where = array(
            'id_brg' => $id_brg
        );
        $this->model_barang->hapus_barang($where, 'tbl_barang');
        redirect('admin/data_barang/index');
    }
}
