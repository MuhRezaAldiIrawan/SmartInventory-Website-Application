	<body>
	    <section class="ftco-section">
	        <div class="container pt">
	            <div class="row justify-content-center">
	                <div class="col-md-6 text-center mb-5 pt-100">
	                    <h2 class="heading-section">Data Produsen</h2>
	                </div>
	            </div>
	            <button type="button" class="btn mb-2 mb-md-0 btn-primary btn-round pb-100" data-toggle="modal"
	                data-target="#tambahdata">
	                <i class="ion-ios-heart mr-1"></i> Tambah Data
	            </button>
	            <div class="row">
	                <div class="col-md-24 pt-60">
	                    <div class="table-wrap">
	                        <table class="table table-bordered table-hover text-center">
	                            <tr>
	                                <th>No</th>
	                                <th>Nama Produsen</th>
	                                <th>Alamat</th>
	                                <th>Email</th>
	                                <th>Logo Perusahaan</th>
	                                <th>Status</th>
	                            </tr>

	                            <?php  
                        $no=1; 
                        foreach($produsen as $pds) : ?>

	                            <tr>
	                                <td><?php echo $no++ ?></td>
	                                <td><?php echo $pds->nama ?></td>
	                                <td><?php echo $pds->alamat ?></td>
	                                <td><?php echo $pds->email ?></td>
	                                <td><?php echo $pds->logo ?></td>
	                                <td><?php echo $pds->status ?></td>
	                    </div>
	                    </tr>
	                    <?php endforeach; ?>
	                    </table>
	                </div>
	            </div>
	        </div>
	        </div>
	    </section>
	    <!-- Start Feature Area -->

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
	                    <form action="<?php echo base_url().'dataprodusen/dataprodusen/tambah_aksi' ?>" method="POST"
	                        enctype="multipart/form-data">

	                        <div class="form-group">
	                            <label> Nama Produsen</label>
	                            <input type="text" name="nama" class="form-control" id="nama">
	                        </div>
	                        <div class="form-group">
	                            <label> Alamat</label>
	                            <input type="text" name="alamat" class="form-control" id="alamat">
	                        </div>
	                        <div class="form-group">
	                            <label> Email Produsen</label>
	                            <input type="text" name="email" class="form-control" id="email">
	                        </div>
	                        <div class="form-group">
	                            <label class="form-label" for="stok">Status</label>
	                            <select class="form-control" id="status" name="status">
	                                <option>Aktif</option>
	                                <option>Belum Verifikasi</option>
	                                <option>Tidak Aktif</option>
	                            </select>
	                        </div>
	                        <div class="form-group">
	                            <label>Gambar</label><br>
	                            <input type="file" name="logo" class="form-control" id="logo">
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