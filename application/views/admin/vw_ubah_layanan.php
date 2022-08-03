<section class="content">
      <div class="container-fluid">
        <div class="row" style="margin-left:20%; margin-right:5%; margin-top:3%; margin-bottom:3%">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Layanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php $i = 0;
              foreach ($layanan as $row) {
                $i++;
              ?>
              <form action="<?php echo base_url('layanan/updateDataLayanan/') . $row['id_layanan']?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Layanan</label>
                    <input type="hidden" class="form-control" name="id_layanan" value="<?= $row['id_layanan']; ?>">
                    <input type="text" class="form-control" name="nama_layanan" value="<?= $row['nama_layanan']; ?>">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= $row['deskripsi']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?= $row['harga']; ?>">
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?= base_url('Layanan') ?>" class="btn btn-danger">Tutup</a>
                </div>
              </form>
              <?php } ?>
            </div>
            <!-- /.card -->