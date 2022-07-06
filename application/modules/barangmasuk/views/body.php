  <!-- konten -->

  <body>
      <section class="ftco-section pt-50">
          <div class="container">
              <div class="row justify-content-center pt-100">
                  <div class="col-md-6 text-center mb-4">
                      <h2 class="heading-section">Barang Masuk</h2>
                  </div>
              </div>
              <button type="button" class="btn mb-2 mb-md-0 btn-primary btn-round pb-100" data-toggle="modal"
                  data-target="#tambahdata">
                  <i class="ion-ios-heart mr-1"></i> Tambah Data
              </button>
              <div class="row text-center">
                  <div class="col-md-24 pt-40">
                      <div class="table-wrap">
                          <table class="table">
                              <thead class="thead-primary">
                                  <tr>
                                      <th>No</th>
                                      <th>Nama Barang</th>
                                      <th>Harga</th>
                                      <th>Jumlah</th>
                                      <th>Foto barang</th>
                                  </tr>
                              </thead>
                              <?php  
                        $no=1; 
                        foreach($barangmasuk as $brm) : ?>
                              <tr class="alert" role="alert">
                                  <td class="text-center"><?php echo $no++ ?></td>
                                  <td class="text-center"><?php echo $brm->nama ?></td>
                                  <td class="text-center"><?php echo $brm->harga ?></td>
                                  <td class="text-center"><?php echo $brm->jumlah ?></td>
                                  <td class="text-center"><?php echo $brm->gambar ?></td>
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
                  <form action="<?php echo base_url().'barangmasuk/barangmasuk/tambah_aksi' ?>" method="POST"
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
                          <label>Jumlah Barang Masuk</label>
                          <input type="text" name="jumlah" class="form-control" id="jumlah">
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