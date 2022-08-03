<section class="content">
    <div class="container-fluid">
        <div class="row" style="margin-left:20%; margin-top:10%; margin-right:15%; margin-bottom:15%">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pemesanana</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
               
                    <form action="<?= base_url('Pemesanan/createDataPemesanan')?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="card-body ">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <?php foreach($user as $us){?>
                                <input value=<?php echo $us['id_user']?> type="hidden" class="form-control"
                                    name="user_id" id="user_id">
                                <h1 ><?php echo $us['nama']?></h1>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" style="font-size:100%;"  name="tanggal">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="form-group">
                                <label for="jam">Jam</label>
                                <input type="time" class="form-control" id="jam" style="font-size:100%;" name="jam" >
                                <?= form_error('jam', '<small class="text-danger pl-3">', '</small>'); ?>

                                
                            </div>
                            <div class="form-group">
                                <label for="nohp">Handphone</label>
                                <input type="text" class="form-control" id="nohp" style="font-size:100%;" name="nohp">
                                <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="form-group">

                                <select onchange="selectHarga();" for="layanan" id="id_layanan" style="font-size:100%;" name="id_layanan"
                                    class="form-select" required>
                                    <option selected disabled>Service</option>
                                    <?php foreach($layanan as $as){?>
                                    <option value="<?= $as['id_layanan']?>"><?php echo $as['nama_layanan']?></option>
                                    <?php } ?>

                                </select>
                                <?= form_error('id_layanan', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" style="font-size:100%;" name="harga" readonly required>
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button onclick="habty()" type="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</section>
<script>
function selectHarga() {
    var select = document.getElementById("id_layanan").value;
    var setinput = document.getElementById("harga").value;
    if (select == 1) {

        document.getElementById("harga").value = 100000;
    }
    if (select == 2) {

        document.getElementById("harga").value = 300000;
    }
    if (select == 3) {

        document.getElementById("harga").value = 45000;
    }
    if (select == 4) {

        document.getElementById("harga").value = 50000;
    }
}
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$("#submit").click(function habty() {
    var tanggal = $('#tanggal').val();
    var jam = $('#jam').val();
    var nohp = $('#nohp').val();
    var id_layanan = $('#id_layanan').val();
    if (tanggal == '' || jam == '' || nohp == '' || id_layana == '') {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Harap diisi dengan benar',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Pesanan berhasil disimpan dan Datang 10 menit jam yang telah di pesan, Terimakasih',
            showConfirmButton: false,
            timer: 1500
        })
    }

})
</script>
<!-- /.card -->