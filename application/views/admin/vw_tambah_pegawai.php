<section class="content">
    <div class="container-fluid">
        <div class="row" style="margin-left:20%; margin-right:5% margin-top:3%; margin-bottom:3%">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Pegawai</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?=base_url('Pegawai/createDataPegawai') ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" value="<?=set_value('nama')?>" id="nama" name="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" value="<?=set_value('alamat')?>" id="alamat" name="alamat" placeholder="Alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tempatlahir">Tempat Lahir</label>
                                <input type="text" class="form-control" value="<?=set_value('tempatlahir')?>" id="tempat_lahir" name="tempatlahir" placeholder="Tempat Lahir">
                                <?= form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tanggallahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" value="<?=set_value('tanggallahir')?>"id="tanggal_lahir" name="tanggallahir" placeholder="Tempat Lahir">
                                <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="form-group">
                                <label for="nohp">No Handphone</label>
                                <input type="text" class="form-control" name="no_hp" value="<?=set_value('no_hp')?>" id="no_hp" placeholder="No Handphone">
                                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <div class="custom-file">
                                <input name = "gambar" type="file" class="form-control" value="<?=set_value('gambar')?>" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>

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