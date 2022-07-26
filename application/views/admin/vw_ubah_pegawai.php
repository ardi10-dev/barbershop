<section class="content">
      <div class="container-fluid">
        <div class="row" style="margin-left:20%; margin-right:5%; margin-top:3%; margin-bottom:3%">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php $i = 0;
              foreach ($pegawai as $row) {
                $i++;
              ?>
              <form action="<?php echo base_url('pegawai/updateDataPegawai/') . $row['id_pegawai']?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="hidden" class="form-control" name="nama" value="<?= $row['id_pegawai']; ?>">
                    <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $row['alamat']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempatlahir" value="<?= $row['tempatlahir']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggallahir" value="<?= $row['tanggallahir']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" value="<?= $row['no_hp']; ?>">
                  </div>
                  <div class="form-group">
                            <img src="<?= base_url('assets/img/profile/') . $row['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar" value="<?= $row['gambar']; ?>">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?= base_url('Pegawai') ?>" class="btn btn-danger">Tutup</a>
                </div>
              </form>
              <?php } ?>
            </div>
            <!-- /.card -->