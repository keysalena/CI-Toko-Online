<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

        </div>
        <div class="col-md-2"></div>
    </div>
</div> -->
<div class="container-fluid">
    <dib class="btn btn-sm btn-success col-md-12">
        <?php
        $grand_total = 0;
        if ($keranjang = $this->cart->contents()) {
            foreach ($keranjang as $item) {
                $grand_total = $grand_total + $item['subtotal'];
            }
            echo "Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');
        ?>
    </dib>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div align=center>
                <h4 class="m-0 font-weight-bold text-primary mb-3">Input Alamat Pengiriman dan Pembayaran</h4>
            </div>
            <form action="<?php echo base_url() ?>dashboard/proses" method="post">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input type="text" class="form-control" name="no_telp" placeholder="No. Telepon Anda" required>
                </div>
                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select class="form-control">
                        <option value="" disabled selected>--Pilih--</option>
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">POS Indonesia</option>
                        <option value="">GOJEK</option>
                        <option value="">GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">BANK</label>
                    <select class="form-control">
                        <option value="" disabled selected>--Pilih--</option>
                        <option value="">BCA - xxxxxxxx</option>
                        <option value="">BNI - xxxxxxxx</option>
                        <option value="">BRI - xxxxxxxx</option>
                        <option value="">MANDIRI - xxxxxxxx</option>
                    </select>
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                </div>
            </form>
        <?php
        } else {
            echo "Keranjang Belanja Anda Masih Kosong   <button class='btn btn-sm btn-success' type='button' onclick=\"window.location.href='" . site_url('dashboard/index') . "'\">
            <i class='fas fa-backward fa-sm'></i> Kembali
        </button>";
        }
        ?>
        </div>
    </div>
</div>