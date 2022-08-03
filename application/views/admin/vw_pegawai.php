<div class="row" style="margin-left:20%; margin-right:5%; margin-top:3%; margin-bottom:3%">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Pegawai</h3>
				<div class="card-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
						<div class="input-group input-group-sm" style="width: 150px;">
							<a href="<?=site_url('Pegawai/tambah')?>"><button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>
									Tambah</button></a>
									<?= $this->session->flashdata('pesan'); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive p-0">
				<table class="table table-hover text-nowrap">
				<thead>
						<tr>
							<th>No</th>
							<th>Nama Pegawai</th>
							<th>Alamat</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>No Handphone</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1?>
						<?php foreach ($pegawai as $p): ?>
						<tr>
							<td><center><?= $i ?></center></td>
							<td><?= $p['nama']; ?></td>
							<td><?= $p['alamat']; ?></td>
							<td><?= $p['tempatlahir']; ?></td>
							<td><?= $p['tanggallahir']; ?></td>
							<td><?= $p['no_hp']; ?></td>
							<td><img src="<?= base_url('assets/img/profile/') . $p['gambar'];?>" width="50px" height="50px"></td>
							<td><a href="<?= base_url('Pegawai/deleteDataPegawai/'). $p['id_pegawai'];?>" class="badge badge-danger">Hapus</a>
								<a href="<?= base_url('Pegawai/edit/').$p['id_pegawai'];?>" class="badge badge-warning">Edit</a>
								</td>
							
						</tr>
						<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
</div>
