  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrasi</p>
      <form class="user" action="<?= base_url('auth/registrasi');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>" id="nama" placeholder="Nama">
          
          <div class="input-group-append">
            <div class="input-group-text">
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>"placeholder="Email">
          
          <div class="input-group-append">
            <div class="input-group-text">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="no_hp" value="<?= set_value('no_hp'); ?>"class="form-control" id="no_hp" placeholder="No Handphone">
          
          <div class="input-group-append">
            <div class="input-group-text">
            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password1" value="<?= set_value('password1'); ?>" class="form-control" id="password1" placeholder="Password">
          
          <div class="input-group-append">
            <div class="input-group-text">
            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password2" class="form-control" value="<?= set_value('password2'); ?>"id="password2" placeholder="Konfirmasi Password">
          
          <div class="input-group-append">
            <div class="input-group-text">
            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
          </div>
        </div>
      </form>
      <div class="social-auth-links text-center mb-3">
      </div>
      <p class="mb-0">
        <a href="<?= base_url('Auth')?>" class="text-center">Login</a>
      </p>
    </div>
  </div>
</div>



