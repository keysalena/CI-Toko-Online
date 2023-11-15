<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h6 class="m-0 font-weight-bold text-primary mb-3">Detail Keranjang</h6>
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                        <th class="td-a"></th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($this->cart->contents() as $items) :
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $items['name'] ?></td>
                            <td>
                                <input class="form-control quantity-input" type="number" name="pembelian" value="<?php echo $items['qty'] ?>" min="1" max="<?php echo $items['stok'] ?>" data-price="<?php echo $items['price']; ?>">
                            </td>
                            <td align="right"><?php echo "Rp " . number_format($items['price'], 0, ",", ".")  ?></td>
                            <td align="right" class="subtotal"><?php echo "Rp " . number_format($items['subtotal'], 0, ",", ".")  ?></td>
                            <td align="center"><a href="<?php echo base_url('dashboard/hapus_id/') . $items['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td class="td-a" align="right" colspan="4">Total :</td>
                        <td align="right" id="total">
                            <?php echo "Rp " . number_format($this->cart->total(), 0, ",", ".") ?>
                        </td>
                        <td></td>
                    </tr>
                </table>
                <div align="right">
                    <button class="btn btn-sm btn-danger" type="button" onclick="window.location.href='<?php echo site_url('dashboard/hapus'); ?>'">
                        <i class="fas fa-trash fa-sm"></i> Hapus
                    </button>
                    <button class="btn btn-sm btn-success" type="button" onclick="window.location.href='<?php echo site_url('dashboard/bayar'); ?>'">
                        <i class="fas fa-money-bill fa-sm"></i> Bayar
                    </button>
                </div>
                
                <button class="btn btn-sm btn-primary" type="button" onclick="window.location.href='<?php echo site_url('dashboard/index'); ?>'">
                    <i class="fas fa-backward fa-sm"></i> Kembali
                </button>
            </div>
        </div>
    </div>
</div>
<script>
   $('.quantity-input').on('input', function() {
    var quantity = $(this).val();
    var price = $(this).data('price');
    var subtotal = quantity * price;

    $(this).closest('tr').find('.subtotal').text("Rp " + number_format(subtotal, 0, ",", "."));

    updateTotal();
});

function updateTotal() {
    var total = 0;
    $('.subtotal').each(function() {
        var subtotalText = $(this).text().replace('Rp ', '').replace(/\./g, '');
        total += parseFloat(subtotalText);
    });

    $('#total').text("Rp " + number_format(total, 0, ",", "."));
}
</script>