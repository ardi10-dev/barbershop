<div class="row" style="margin-left:20%; margin-right:5%">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Layanan</h3>
				<div class="card-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
						<div class="input-group input-group-sm" style="width: 150px;">
							<a href="<?=site_url('Layanan/tambah')?>"><button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>
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
						<th>Nama Layanan</th>
						<th>Deskripsi</th>
						<th>Harga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($layanan as $l) : ?>
					<tr>
						<td>
						<center><?= $i; ?></center>
						</td>
						<td>
						<?= $l['nama_layanan']; ?>
						</td>
						<td>
						<?= $l['deskripsi']; ?>
						</td>
						<td>
						<?= $l['harga']; ?>
						</td>
						<td><a href="<?php base_url('')?>deleteDataLayanan/<?= $l['id_layanan'];?>" class="badge badge-danger">Hapus</a>
							<a href="<?php base_url('')?>edit/<?= $l['id_layanan'];?>" class="badge badge-warning">Edit</a>
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
