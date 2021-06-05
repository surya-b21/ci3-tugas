<div class="container-md">
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<h1 class="display-4 text-center">Tambah Data</h1>
			<?php echo validation_errors(); ?>
			<?php echo form_open('hotel/tampilForm'); ?>

			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="nama"> <?= set_value('nama') ?>
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
				<input type="number" class="form-control" name="lamainap"> <?= set_value('lamainap') ?>
			</div>

			<div class="form-group">
				<label>Keterangan</label>
				<textarea class="form-control" rows="3" name="keterangan"></textarea> <?= set_value('keterangan') ?>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</form>
		<div class="col"></div>
	</div>
</div>
