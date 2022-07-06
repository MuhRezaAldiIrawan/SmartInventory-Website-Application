 	<body>
 	    <section class="ftco-section">
 	        <div class="container">
 	            <div class="row justify-content-center">
 	                <div class="col-md-6 text-center mb-4 pt-80">
 	                    <h2 class="heading-section">Data Barang</h2>
 	                </div>
 	            </div>
 	            <button type="button" class="btn mb-2 mb-md-0 btn-primary btn-round pb-100" data-toggle="modal"
 	                data-target="#tambahdata">
 	                <i class="ion-ios-heart mr-1"></i> Tambah Data
 	            </button>
 	            <div class="row">
 	                <div class="col-md-24 pt-50">
 	                    <div class="table-wrap justify-content-center">
 	                        <table class="table myaccordion table-hover" id="accordion">
 	                            <thead>
 	                                <tr>
 	                                    <th class="text-center">No</th>
 	                                    <th class="text-center">Nama Produk</th>
 	                                    <th class="text-center">Harga</th>
 	                                    <th class="text-center">Stok Barang</th>
 	                                    <th class="text-center">Produsen</th>
 	                                    <th class="text-center">Detail</th>
 	                                </tr>
 	                            </thead>

 	                            <?php  
                        $no=1; 
                        foreach($databarang as $dtb) : ?>

 	                            <tr data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
 	                                aria-controls="collapseOne">
 	                                <td class="text-center"><?php echo $no++ ?></td>
 	                                <td class="text-center"><?php echo $dtb->nama ?></td>
 	                                <td class="text-center"><?php echo $dtb->harga ?></td>
 	                                <td class="text-center"><?php echo $dtb->stok ?></td>
 	                                <td class="text-center"><?php echo $dtb->produsen ?></td>
 	                                <td class="text-start"><?php echo $dtb->detail ?></td>

 	                            </tr>
 	                            <?php endforeach; ?>
 	                        </table>
 	                    </div>
 	                </div>
 	            </div>
 	        </div>
 	    </section>

 	</body>

 	<!-- Modal input -->
 	<div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	    <div class="modal-dialog">
 	        <div class="modal-content">
 	            <div class="modal-header">
 	                <h5 class="modal-title" id="exampleModalLabel">Input Data </h5>
 	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 	                    <span aria-hidden="true">&times;</span>
 	                </button>
 	            </div>
 	            <div class="modal-body">
 	                <form action="<?php echo base_url().'databarang/databarang/tambah_aksi' ?>" method="POST"
 	                    enctype="multipart/form-data">

 	                    <div class="form-group">
 	                        <label> Nama Produk</label>
 	                        <input type="text" name="nama" class="form-control" id="nama">
 	                    </div>
 	                    <div class="form-group">
 	                        <label> Harga</label>
 	                        <input type="text" name="harga" class="form-control" id="harga">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Stok Barang</label>
 	                        <input type="text" name="stok" class="form-control" id="stok">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Produsen</label>
 	                        <input type="text" name="produsen" class="form-control" id="produsen">
 	                    </div>
 	                    <div class="form-group">
 	                        <label>Detail</label>
 	                        <input type="text" name="detail" class="form-control" id="detail">
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