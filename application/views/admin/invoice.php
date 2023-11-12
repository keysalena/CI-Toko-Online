<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Invoice Pemesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Id Invoice</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pengiriman</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Batas Pembayaran</th>
                        <th colspan="3">AKSI</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($invoice as $item) :
                    ?>
                        <tr>
                            <td><?php echo $item->id; ?></td>
                            <td><?php echo $item->nama; ?></td>
                            <td><?php echo $item->alamat; ?></td>
                            <td><?php echo $item->tgl_pesan; ?></td>
                            <td><?php echo $item->batas_bayar; ?></td>

                            <td>
                                <a href="<?php echo site_url('admin/invoice/detail/' . $item->id) ?>" class="btn btn-primary btn-sm"><i class="fa fa-list"></i> Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>