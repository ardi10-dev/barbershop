<section class="content">
      <div class="container-fluid">
        <div class="row" style="margin-left:20%; margin-right:5%; margin-top:3%; margin-bottom:3%">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Layanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="<?=base_url('Layanan/createDataLayanan') ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_layanan">Nama Layanan</label>
                    <input type="text" class="form-control" id="nama_layanan" value="<?=set_value('nama_layanan')?>" name="nama_layanan" placeholder="Nama Layanan">
                    <?= form_error('nama_layanan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" value="<?=set_value('deskripsi')?>"id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" value="<?=set_value('harga')?>" id="harga" name="harga" placeholder="Harga">
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?= base_url('Layanan') ?>" class="btn btn-danger">Tutup</a>
                </div>
              </form>
            </div>
            <!-- /.card -->