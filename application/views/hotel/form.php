
	<div class="container-md">
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<h1 class="display-4 text-center">Tambah Data</h1>
				<?php echo validation_errors(); ?>
				<?php echo form_open('hotel/form'); ?>

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
					<input type="number" class="form-control" name="harga">
				</div>

				<div class="form-group">
					<label>Kamar Tersedia</label>
					<input type="number" class="form-control" name="tersedia">
				</div>

				<div class="form-group">
					<label>Kamar Terisi</label>
					<input type="number" class="form-control" name="terisi">
				</div>

				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" rows="3" name="keterangan"></textarea>
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<div class="col"></div>
		</div>
	</div>

