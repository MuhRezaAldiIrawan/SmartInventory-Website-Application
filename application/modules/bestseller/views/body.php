    <!-- Pricing section Start -->
    <section id="pricing" class="section-padding bg-gray pt-120">
        <div class="container">
            <div class="section-header text-center pt-120">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Best Seller</h2>
                <p>Penjualan barang Terbaik dengan pengeluaran barang paling banyak di setiap bulannya </p>
            </div>
        </div>
    </section>
    <!-- Pricing Table Section End -->


    <section class="py-5" id="blog" class="section-padding">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
                <?php foreach ($barangkeluar as $brk) : ?>
                <div class="col mb-10">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$brk->gambar ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $brk->nama ?></h5>
                                <!-- Product price-->
                                Rp. <?php echo number_format($brk->harga, 0,',','.') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </section>




    </div>
    </div>
    </section>

    <!-- blog Section End -->