  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrasi</p>
      <form class="user" action="<?= base_url('auth/cek_regis');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No Handphone">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password2" class="form-control" id="password2" placeholder="Konfirmasi Password">
          <div class="input-group-append">
            <div class="input-group-text">
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



