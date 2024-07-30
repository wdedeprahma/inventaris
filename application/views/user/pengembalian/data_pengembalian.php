<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data pengembalian Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('user/tambah_pengembalian') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Tanggal pengembalian</th>
                            <th>Nama Barang</th>
                            <th>Kategori Barang</th>
                            <th>Lokasi</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($pengembalian as $x) {
                        ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td>
                                    <?php
                                    $buktiName = '';
                                    foreach ($pegawai as $pegawaiItem) {
                                        if ($pegawaiItem->id_pegawai == $x->id_pegawai) {
                                            $buktiName = $pegawaiItem->nama_pegawai;
                                            break;
                                        }
                                    }
                                    echo $buktiName;
                                    ?>
                                </td>
                                <td><?= date('d-m-Y', strtotime($x->tanggal_pengembalian)); ?></td>
                                <td>
                                    <?php
                                    $buktiName = '';
                                    foreach ($barang as $barangItem) {
                                        if ($barangItem->id_barang == $x->id_barang) {
                                            $buktiName = $barangItem->nama_barang;
                                            break;
                                        }
                                    }
                                    echo $buktiName;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $kategoriName = '';
                                    foreach ($kategori as $kategoriItem) {
                                        if ($kategoriItem->id_kategori == $x->id_kategori) {
                                            $kategoriName = $kategoriItem->kategori;
                                            break;
                                        }
                                    }
                                    echo $kategoriName;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $lokasiName = '';
                                    foreach ($lokasi as $lokasiItem) {
                                        if ($lokasiItem->id_lokasi == $x->id_lokasi) {
                                            $lokasiName = $lokasiItem->lokasi;
                                            break;
                                        }
                                    }
                                    echo $lokasiName;
                                    ?>
                                </td>
                                <td><?= $x->jumlah ?></td>

                                <td><?= $x->status_pengembalian ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>