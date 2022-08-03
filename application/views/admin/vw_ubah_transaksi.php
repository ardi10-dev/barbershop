<section class="content">
      <div class="container-fluid">
        <div class="row" style="margin-left:20%; margin-right:5%; margin-top:3%; margin-bottom:3%">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                                        $q = $this->db->get('user');
										                    $p = $this->db->get('layanan');
                                        $dist =  array();
                                        if ($q->num_rows() > 0) {
                                            foreach ($q->result() as $row) {
                                                $dist[] = $row;
                                            }
                                        }
										                    $dist2 =  array();
										                    if ($p->num_rows() > 0) {
                                            foreach ($p->result() as $row2) {
                                                $dist2[] = $row2;
                                            }
                                        }
                                        $i = 0;
                                        foreach ($transaksi as $e) {
                                        $i++; ?>
              <form action="<?php echo base_url('transaksi/updateDataTransaksi/') . $e['id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Customer</label>
                    <input type="hidden" class="form-control" name="id" value="<?= $e['id']; ?>">
                    <input type="text" class="form-control" name="user_id" value="<?php
                                            foreach ($dist as $item) {
                                                $item->id_user;
                                                if ($item->id_user == $e['user_id']) echo
                                                $item->nama;
												}?>" readonly>
                        
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" value="<?= $e['tanggal']; ?>">
                    <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jam</label>
                    <input type="time" class="form-control" name="jam" value="<?= $e['jam']; ?>">
                    <?= form_error('jam', '<small class="text-danger pl-3">', '</small>'); ?>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Layanan</label>
                    <select name="id_layanan" class="form-control" required>
												<option value="">-- Pilih Layanan --</option>
												<?php
                                                // var_dump($row['ibu_id'])  ;
                                                // die;
                                                if (count($dist2)) {
                                                    foreach ($dist2 as $item) {
                                                ?>
												<option value="<?php echo $item->id_layanan; ?>"
													<?php if ($item->id_layanan == $e['id_layanan']) echo 'selected'; ?>>
													<?php echo $item->nama_layanan; ?></option>
												<?php
                                                    }
                                                }
                                                ?>
											</select>
                      <?= form_error('id_layanan', '<small class="text-danger pl-3">', '</small>'); ?>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?= $e['harga']; ?>">
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>

                  </div>
                  
                  <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="Sedang Di proses"> Verifikasi </option>
                                            <option value="Sudah Selesai">Sudah Selesai</option>
                                            
                                        </select>
                                    </div>
                                    <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?= base_url('Transaksi') ?>" class="btn btn-danger">Tutup</a>
                </div>
              </form>
              <?php } ?>
            </div>
            <!-- /.card -->