<div class="container-md mt-5">
	<h1 class="display-4 text-center">Data Kamar</h1>
	<?php if ($this->session->flashdata('status')) : ?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<?= $this->session->flashdata('status') ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<a class="btn btn-success" href="<?= site_url('hotel/tampilForm') ?>">Tambah Data</a>
	<div class="container-fluid my-5">
		<table class="table table-striped">
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
							<a class="badge badge-warning" href="<?= site_url('hotel/update') ?>/<?= $data['id'] ?>">Ubah</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Edit Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
</div>
