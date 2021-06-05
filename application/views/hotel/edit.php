<div class="container">
	<h1 class="display-4 text-center">Update Data</h1>
	<div class="modal-body">
		<?php echo validation_errors(); ?>
		<?php echo form_open('hotel/update/' . $single->id . ''); ?>

		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" value="<?= $single->nama ?>">
		</div>

		<label>Room Type</label>
		<?php
		foreach ($ref as $data) {
			$options[$data['kode']] = ucwords($data['namaruang']);
		}
		$pilih = set_value('idJenis');
		echo form_dropdown('idJenis', $options, $pilih, 'class="custom-select"');
		?>

		<div class="form-group">
			<label>Lama Inap</label>
			<input type="number" class="form-control" name="lamainap" value="<?= $single->lamainap ?>">
		</div>

		<div class="form-group">
			<label>Keterangan</label>
			<textarea class="form-control" rows="3" name="keterangan"><?= $single->keterangan ?></textarea>
		</div>
		<input type="hidden" class="form-control" name="id" value="<?= $single->id ?>">
	</div>
	<div class="modal-footer">
		<a class="btn btn-secondary" href="<?= site_url('hotel/index') ?>">Kembali</a>
		<button type="submit" class="btn btn-primary">Update</button>
	</div>
	</form>
</div>
</div>
