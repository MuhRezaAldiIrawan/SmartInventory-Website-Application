<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    <input class="input100" type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>" />
    <?= form_error('email', '<small class="text-danger pl-3">', '</small'); ?>
    <span class="focus-input100">
        <img src="<?= base_url('assets/regis/images/person-fill.svg'); ?>" alt="IMG" aria-hidden="true" />
    </span>
</div>

<div class="wrap-input100 validate-input" data-validate="Password is required">
    <input class="input100" type="password" name="password" placeholder="Password" />
    <?= form_error('password', '<small class="text-danger pl-3">', '</small'); ?>
    <span class="focus-input100"></span>
</div>

<div class="container-login100-form-btn">
    <button class="login100-form-btn">Login</button>
</div>

<div class="text-center p-t-12">
    <a class="txt2" href="#"> Forgot Username / Password? </a>
</div>

<div class="text-center p-t-136">
    <a type="submit" class="txt2" href="<?= base_url('regis/regis'); ?>">
        Create your Account
        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
    </a>
</div>
</form>
</div>
</div>
</div>