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
	<a class="btn btn-success" href="<?= site_url('hotel/form') ?>">Tambah Data</a>
	<div class="container-fluid my-5">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Nama</th>
					<th scope="col">Harga</th>
					<th scope="col">Tersedia</th>
					<th scope="col">Terisi</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($hotel as $data) : ?>
					<tr>
						<td><?= ucwords($data['nama']) ?></td>
						<td><?= $data['harga'] ?></td>
						<td><?= $data['tersedia'] ?></td>
						<td><?= $data['terisi'] ?></td>
						<td><?= $data['keterangan'] ?></td>
						<td><a class="badge badge-danger" href="<?= site_url('hotel/hapus') ?>/<?= $data['id'] ?>" onclick="return confirm('Apakah anda akan menghapus data ?')">Hapus</a>
							<a class="badge badge-warning" href="<?= site_url('hotel/ubah') ?>/<?= $data['id'] ?>" data-toggle="modal" data-target="#staticBackdrop">Ubah</a>
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
			<div class="modal-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open('hotel/update'); ?>

				<label>Room Type</label>
				<select class="custom-select" name="nama">
					<option value="single room">Single Room</option>
					<option value="double room">Double Room</option>
					<option value="triple room">Triple Room</option>
					<option value="quad room">Quad Room</option>
					<option value="queen room">Queen Room</option>
					<option value="king room">King Room</option>
					<option value="twin room">Twin Room</option>
					<option value="doubledouble room">DoubleDouble Room</option>
					<option value="studio room">Studio Room</option>
				</select>

				<div class="form-group">
					<label>Harga</label>
					<input type="number" class="form-control" name="harga" value="<?= $data['harga'] ?>">
				</div>

				<div class="form-group">
					<label>Kamar Tersedia</label>
					<input type="number" class="form-control" name="tersedia" value="<?= $data['tersedia'] ?>">
				</div>

				<div class="form-group">
					<label>Kamar Terisi</label>
					<input type="number" class="form-control" name="terisi" value="<?= $data['terisi'] ?>">
				</div>

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" rows="3" name="keterangan"><?= $data['keterangan'] ?></textarea>
				</div>
				<input type="hidden" class="form-control" name="id" value="<?= $data['id'] ?>">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary">Edit</button>
			</div>
		</div>
	</div>
</div>
