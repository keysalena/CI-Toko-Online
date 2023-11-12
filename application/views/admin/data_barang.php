<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>NO</th>
                        <th>NAMA BARANG</th>
                        <th>KETERANGAN</th>
                        <th>KATEGORI</th>
                        <th>HARGA</th>
                        <th>STOK</th>
                        <th colspan="3">AKSI</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($barang as $brg) :
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $brg->nama_barang; ?></td>
                            <td><?php echo $brg->keterangan; ?></td>
                            <td><?php echo $brg->kategori; ?></td>
                            <td><?php echo "Rp " . number_format($brg->harga, 0, ",", "."); ?></td>
                            <td><?php echo $brg->stok; ?></td>
                            <td>

                                <?php echo anchor('dashboard/detail/' . $brg->id_brg, '                                <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>'); ?>
                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal<?php echo $brg->id_brg; ?>"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal<?php echo $brg->id_brg; ?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>


                </table>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('admin/data_barang/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Kategori</label>
                                    <select name="kategori" class="form-control">
                                        <option>Elektronik</option>
                                        <option>Pakaian Pria</option>
                                        <option>Pakaian Wanita</option>
                                        <option>Pakaian Anak</option>
                                        <option>Peralatan Olahraga</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Harga</label>
                                    <input type="number" class="form-control" name="harga" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Stok</label>
                                    <input type="number" class="form-control" name="stok" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Gambar</label>
                                    <input type="file" class="form-control" name="gambar" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- Edit Modal -->
            <?php foreach ($barang as $brg) : ?>
                <div class="modal fade" id="editModal<?php echo $brg->id_brg; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url('admin/data_barang/edit_aksi/' . $brg->id_brg); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nama">Nama Barang</label>
                                        <input type="hidden" class="form-control" name="id_brg" value="<?php echo $brg->id_brg; ?>">
                                        <input type="text" class="form-control" name="nama_barang" value="<?php echo $brg->nama_barang; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" name="keterangan" value="<?php echo $brg->keterangan; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" class="form-control">
                                            <option value="<?php echo $brg->harga; ?>"><?php echo $brg->kategori; ?></option>
                                            <option>Elektronik</option>
                                            <option>Pakaian Pria</option>
                                            <option>Pakaian Wanita</option>
                                            <option>Pakaian Anak</option>
                                            <option>Peralatan Olahraga</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" name="harga" value="<?php echo $brg->harga; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="number" class="form-control" name="stok" value="<?php echo $brg->stok; ?>">
                                    </div>
                                    <!-- <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar">
                            <small class="text-muted">Gambar saat ini: <?php echo $brg->gambar; ?></small>
                        </div> -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hapus Modal -->
                <div class="modal fade" id="hapusModal<?php echo $brg->id_brg; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Anda yakin ingin menghapus <?php echo $brg->nama_barang ?>?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="<?php echo base_url('admin/data_barang/hapus_aksi/' . $brg->id_brg); ?>" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>