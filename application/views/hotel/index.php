<div class="container-fluid">
	<?php if ($this->session->flashdata('status')) : ?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<?= $this->session->flashdata('status') ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<h1 class="h3 mb-2 text-gray-800 text-center">Dashboard Admin</h1>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col"></div>
				<div class="col"></div>
				<div class="col-ml-auto">
					<div class="container mb-4">
						<!-- Topbar Search -->
						<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
							<div class="input-group">
								<input type="text" class="form-control bg-light border-0 small" placeholder="Cari Data" aria-label="Search" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button class="btn btn-primary" type="button">
										<i class="fas fa-search fa-sm"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th scope="col">Nama</th>
							<th scope="col">Lama Inap (@malam)</th>
							<th scope="col">Jenis Ruangan</th>
							<th scope="col">Keterangan</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($hotel as $data) : ?>
							<tr>
								<td><?= ucwords($data['nama']) ?></td>
								<td><?= $data['lamainap'] ?></td>
								<td><?= ucwords($data['namaruang']) ?></td>
								<td><?= $data['keterangan'] ?></td>
								<td><a class="badge badge-danger" href="<?= site_url('hotel/hapus') ?>/<?= $data['id'] ?>" onclick="return confirm('Apakah anda akan menghapus data ?')">Hapus</a>
									<a class="badge badge-warning" href="<?= site_url('hotel/update') ?>/<?= $data['id'] ?> ">Ubah</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
