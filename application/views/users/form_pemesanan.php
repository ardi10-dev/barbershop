<section class="content">
    <div class="container-fluid">
        <div class="row" style="margin-left:20%; margin-top:10%; margin-right:15%">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pemesanana</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="</? = base_url('Pemesanan/createDataPemesanan')?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="hidden" class="form-control" name="id_layanan">
                                <?php foreach ($user as $us) {?>
                                <input type="text" class="form-control" name="user_id" value="<?= $us['nama']; ?>" >
                                <?php } ?>
												     
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jam</label>
                                <input type="text" class="form-control" id="jam" name="jam" >
                            </div>
                            <div class="form-group">
                                
                                <select id="id_layanan" name="id_layanan" class="form-select" required>
                                <option selected  disabled>Service</option>
                                    <?php foreach($layanan as $as){?>
                                    <option value=""><?php echo $as['nama_layanan']?></option>
                                    <?php } ?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" >
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</section>
<!-- /.card -->