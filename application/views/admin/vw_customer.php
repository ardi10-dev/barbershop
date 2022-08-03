<div class="row" style="margin-left:20%; margin-right:5%; margin-top:3%; margin-bottom:3%">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Customer</h3>
				<!-- /<div class="card-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
						<div class="input-group input-group-sm" style="width: 150px;">
							<a href=""><button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>
									Tambah</button></a>
						</div>
					</div>
				</div>-->
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive p-0">
			<?= $this->session->flashdata('pesan'); ?>
			<table class="table table-hover text-nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Customer</th>
							<th>Email</th>
							<th>No Handphone</th>
							<th>Role</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						<?php foreach ($customer as $u) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $u['nama'];?></td>
							<td><?= $u['email'];?></td>
							<td><?= $u['no_hp'];?></td>
							<td><?= $u['role'];?></td>
							<td><img src="<?= base_url('assets/img/profile/') . $u['gambar'];?>" width="50px" height="50px"></td>
							<td><a href="<?= base_url('customer/deleteDataCustomer/').$u['id_user'];?>" class="badge badge-danger">Hapus</a>
								<a href="<?= base_url('customer/edit/').$u['id_user'];?>" class="badge badge-warning">Edit</a>
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
