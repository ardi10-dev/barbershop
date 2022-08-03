  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>
<?=$this->session->flashdata('message');?>
      <form class="user" action="<?= base_url('auth');?>" method="post">
        <div class="input-group mb-3">
          <input type="text" value="<?=set_value('email');?>" class="form-control" id="email" name="email" placeholder="Email">
          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" value="<?=set_value('nama')?>"class="form-control"id="password" name="password" placeholder="Password">
          <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
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



