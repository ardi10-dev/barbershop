<section class="content">
      <div class="container-fluid">
        <div class="row" style="margin-left:20%; margin-right:5%">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Customer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php $i = 0;
              foreach ($user as $row) {
                $i++;
              ?>
              <form action="<?php echo base_url('customer/updateDataCustomer/') . $row['id_user']?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Customer</label>
                    <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $row['email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Hp</label>
                    <input type="text" class="form-control" name="no_hp" value="<?= $row['no_hp']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Handphone</label>
                    <select name="role" class="form-control">
                      <option value="">-- Pilih Role --</option>
											<option value="Admin" <?php if ($row['role'] == "Admin") { echo "selected";} ?>>Admin</option>
											<option value="User" <?php if ($row['role'] == "User") { echo "selected";} ?>>User</option>
                    </select>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <?php } ?>
            </div>
            <!-- /.card -->