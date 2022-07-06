<body>

    <div class="limiter">
        <div class="container-table100 pt-90">
            <div class="wrap-table100 pt-90">
                <div class="table100 pt-90">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-4 ">
                            <h2 class="heading-section text-white">Nota Barang</h2>
                        </div>
                    </div>
                    <a href="tambahnota" type="button" class="btn mb-2 mb-md-0 btn-primary btn-round"
                        data-toggle="modal" data-target="#tambahdata">
                        <i class="ion-ios-heart mr-1"></i> Tambah Data
                    </a>
                    <table>
                        <thead>
                            <tr class="table100-head pt-100 justify-content-center">
                                <th class="text-center">No</th>
                                <th class="column1 text-center">Tanggal Nota</th>
                                <th class="column2 text-center">Produsen</th>
                                <th class="column3 text-center">Nama Barang</th>
                                <th class="column5 text-center">jumlah Barang</th>
                                <th class="column6 text-end">Total Bayar</th>
                                <th class="column6 text-end">Gambar</th>
                            </tr>
                        </thead>
                        <?php  
                        $no=1; 
                        foreach($nota as $nta) : ?>

                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td class="text-center"><?php echo $nta->tanggal ?></td>
                            <td class="text-center"><?php echo $nta->produsen ?></td>
                            <td class="text-center"><?php echo $nta->nama ?></td>
                            <td class="text-center"><?php echo $nta->jumlah ?></td>
                            <td class="text-center"><?php echo $nta->total ?></td>
                            <td class="text-center"><?php echo $nta->gambar ?></td>
                </div>
                </tr>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>


<!-- Modal input -->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url().'notabarang/notabarang/tambah_aksi' ?>" method="POST"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label> Tanggal Nota</label>
                        <input type="text" name="tanggal" class="form-control" id="tanggal">
                    </div>
                    <div class="form-group">
                        <label> Produsen</label>
                        <input type="text" name="produsen" class="form-control" id="produsen">
                    </div>
                    <div class="form-group">
                        <label> Nama Barang</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah">
                    </div>
                    <div class="form-group">
                        <label>Total Bayar</label>
                        <input type="text" name="total" class="form-control" id="total">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label><br>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Input -->