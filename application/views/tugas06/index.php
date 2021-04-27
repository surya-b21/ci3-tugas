<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 06</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container-md">
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<h1 class="display-3 text-center">Tugas 06</h1>
				<?php echo validation_errors(); ?>
				<?php echo form_open('tugas06/index'); ?>

				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
				<label>Jenis Kelamin</label> <br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
					<label class="form-check-label">
						Laki-laki
					</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
					<label class="form-check-label">
						Perempuan
					</label>
				</div> </br>
				<div class="form-group">
					<label>Program Studi</label>
					<select class="form-control" name="prodi">
						<option>Teknik Informatika</option>
						<option>Sistem Informasi</option>
					</select>
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" rows="3" name="keterangan"></textarea>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="1" name="cekbox">
					<label class="form-check-label" for="defaultCheck1">
						Checkbox
					</label>
				</div> <br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<div class="col"></div>
		</div>
	</div>
</body>

</html>
