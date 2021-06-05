<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body style="background-color:#0275d8;">
	<div class="container-md">
		<?php if ($this->session->flashdata('sukses')) : ?>
			<div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
				<?= '<p class="warning" style="margin: 10px 20px;">' . $this->session->flashdata('sukses') . '</p>'; ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif ?>
		<div class="row">
			<div class="col"></div>
			<div class="col-6">
				<div class="container bg-light my-5 p-3 rounded shadow">
					<?php echo form_open('loginhotel/index'); ?>
					<h1 class="display-4 text-center">Login Admin</h1>

					<label>Username</label>
					<input type="text" class="form-control" name="username">
					<span style="color: red;"> <?php echo form_error('username'); ?> </span>
					<label>Password</label>
					<input type="password" class="form-control" name="password"> <br>
					<span style="color: red;"> <?php echo form_error('password'); ?> </span>
					<div class="text-center">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
			<div class="col"></div>
		</div>
	</div>
</body>

</html>
