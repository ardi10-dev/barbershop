<div class="row" style="margin-left:20%; margin-right:5%">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Transaksi</h3>
				<!--<div class="card-tools">
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
							<th>Tanggal</th>
							<th>Jam</th>
							<th>Layanan</th>
							<th>Harga</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
										<?php $i = 1; ?>
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

                                        foreach ($transaksi as $e) : ?>
						<tr>
							<td>
								<center><?= $i; ?></center>
							</td>
							<td>
							<?php
                                            foreach ($dist as $item) {
                                                $item->id_user;
                                                if ($item->id_user == $e['user_id']) echo
                                                $item->nama;
												}?>
							</td>
							<td><?= $e['tanggal']; ?></td>
							<td><?= $e['jam']; ?></td>
							<td><?php
                                            foreach ($dist2 as $item) {
                                                $item->id_layanan;
                                                if ($item->id_layanan == $e['id_layanan']) echo
                                                $item->nama_layanan;
												}?></td>
							<td><?= $e['harga']; ?></td>
							<td><?= $e['status']; ?></td>
							<td><a href="<?php base_url('')?>deleteDataTransaksi/<?= $e['id'];?>" class="badge badge-danger">Hapus</a>
								<a href="<?php base_url('')?>edit/<?= $e['id']; ?>" class="badge badge-warning">Edit</a>
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
