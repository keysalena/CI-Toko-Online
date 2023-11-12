<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pesanan Id Invoice: <span class="text-success"><?php echo $invoice->id ?></span></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Jumlah Pesanan</th>
                        <th>Harga Satuan</th>
                        <th>Sub-Total</th>
                    </tr>
                    <?php
                    $no = 1;
                    $total = 0;
                    foreach ($pesanan as $item) :
                        $subtotal =  $item->jumlah * $item->harga;
                        $total += $subtotal;
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $item->nama_barang; ?></td>
                            <td><?php echo $item->jumlah; ?></td>
                            <td align="right"><?php echo "Rp " . number_format($item->harga, 0, ",", "."); ?></td>
                            <td align="right"><?php echo "Rp " . number_format($subtotal, 0, ",", "."); ?></td>
                        </tr>
                    <?php endforeach; ?>

                    <tr>
                        <td class="td-a" align="right" colspan="4">Total :</td>
                        <td align="right" id="total">
                            <?php echo "Rp " . number_format($total, 0, ",", ".") ?>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-sm btn-primary" type="button" onclick="window.location.href='<?php echo site_url('admin/invoice'); ?>'">
                    <i class="fas fa-backward fa-sm"></i> Kembali
                </button>
            </div>
        </div>
    </div>
</div>