 <input class="input100" type="text" id="tanggal" name="tanggal" placeholder="Tanggal Nota"
     value="<?= set_value('tanggal'); ?>" />
 <span class="focus-input100"></span>
 <span class="symbol-input100">
     <img src="<?= base_url('assets/regis/images/person-fill.svg'); ?>" alt="IMG" aria-hidden="true" />
 </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
     <input class="input100" type="text" id="order" name="order" placeholder="Order Id"
         value="<?= set_value('order'); ?>" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <i class="fa fa-envelope" aria-hidden="true"></i>
     </span>
 </div>

 <div class="wrap-input100 validate-input" data-validate="Password is required">
     <input class="input100" type="text" id="nama" name="nama" placeholder="Nama Barang" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <i class="fa fa-lock" aria-hidden="true"></i>
     </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
     <input class="input100" type="text" id="harga" name="harga" placeholder=" Harga Barang" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <i class="fa fa-lock" aria-hidden="true"></i>
     </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
     <input class="input100" type="text" id="jumlah" name="jumlah" placeholder="Jumlah Barang" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <i class="fa fa-lock" aria-hidden="true"></i>
     </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
     <input class="input100" type="text" id="total" name="total" placeholder="Total" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <i class="fa fa-lock" aria-hidden="true"></i>
     </span>
 </div>

 <div class="container-login100-form-btn">
     <button type="submit" class="login100-form-btn">Buat Nota</button>
 </div>

 <div class="text-center p-t-136">
     <a type="submit" class="txt2" href="<?= base_url('login/login'); ?>">
         Kembali Ke list nota
         <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
     </a>
 </div>

 </form>
 </div>
 </div>
 </div>