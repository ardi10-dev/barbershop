  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <?= $this->session->flashdata('pesan'); ?>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $count_customer; ?></h3>

                <a style="color:white;" href="<?=base_url("Customer")?>" ><p >Customer</p></a>
                <a href="<?=base_url("Customer")?>"></a>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $count_transaksi; ?></h3>

                <a style="color:white;" href="<?=base_url("Transaksi")?>" ><p >Total Transaksi</p></a>
                <a href="<?=base_url("Transaksi")?>"></a>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="color:white;"><?= $count_pegawai; ?></h3>

                <a style="color:white;" href="<?=base_url("Pegawai")?>" ><p >Pegawai</p></a>
                <a href="<?=base_url("Pegawai")?>"></a>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">

              <div class="inner">
                <h3><?= $count_layanan; ?></h3>
                <a style="color:white;" href="<?=base_url("Pegawai")?>" ><p >Total Layanan</p></a>
               
                
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
