 <input class="input100" type="text" id="name" name="name" placeholder="name" value="<?= set_value('name'); ?>" />
 <span class="focus-input100"></span>
 <span class="symbol-input100">
     <img src="<?= base_url('assets/regis/images/person-fill.svg'); ?>" alt="IMG" aria-hidden="true" />
 </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
     <input class="input100" type="text" id="email" name="email" placeholder="email"
         value="<?= set_value('email'); ?>" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <i class="fa fa-envelope" aria-hidden="true"></i>
     </span>
 </div>

 <div class="wrap-input100 validate-input" data-validate="Password is required">
     <input class="input100" type="password" id="password1" name="password1" placeholder="Password" />
     <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?>
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <i class="fa fa-lock" aria-hidden="true"></i>
     </span>
 </div>
 <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
     <input class="input100" type="password" id="password2" name="password2" placeholder="Confirm Password" />
     <span class="focus-input100"></span>
     <span class="symbol-input100">
         <i class="fa fa-lock" aria-hidden="true"></i>
     </span>
 </div>

 <div class="container-login100-form-btn">
     <button type="submit" class="login100-form-btn">Buat Akun</button>
 </div>

 <div class="text-center p-t-136">
     <a type="submit" class="txt2" href="<?= base_url('login/login'); ?>">
         Sudah punya akun?
         <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
     </a>
 </div>

 </form>
 </div>
 </div>
 </div>