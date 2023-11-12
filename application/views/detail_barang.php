<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Produk</h6>
        </div>
        <?php foreach ($barang as $brg) : ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $brg->nama_barang ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><button class="btn btn-success"><?php echo "Rp " . number_format($brg->harga, 0, ",", "."); ?></button></td>
                            </tr>
                        </table>
                        <div style="display: flex; justify-content: flex-end; align-items: flex-end; height: 19vh;">
                            <div class="mb-3">
                                <button class="btn btn-danger" type="button" onclick="window.location.href='<?php echo site_url('dashboard/index'); ?>'">
                                    <i class="fas fa-backward fa-sm"></i> Kembali
                                </button>

                                <?php echo anchor('dashboard/tambah_keranjang/' . $brg->id_brg, '<div class="btn btn-primary">Tambah <i class="fas fa-shopping-cart fa-xs"></i></div>'); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php endforeach; ?>