  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>
<?=$this->session->flashdata('message');?>
      <form class="user" action="<?= base_url('auth/cek_login');?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"id="password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>
      <p class="mb-0">
        <a href="<?= base_url('Auth/registrasi')?>" class="text-center">Registrasi</a>
      </p>
    </div>
  </div>
</div>



