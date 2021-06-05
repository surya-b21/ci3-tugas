<!DOCTYPE html>
<html>

<head>
	<title>Beranda</title>

	<link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

	<style>
		html,
		body {
			height: 100%;
		}

		body {
			margin: 0;
			padding: 0;
			width: 100%;
			display: table;
			font-weight: 100;
			font-family: 'Karla';
		}

		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.content {
			text-align: center;
			display: inline-block;
		}

		.title {
			font-size: 96px;
		}

		.opt {
			margin-top: 30px;
		}

		.opt a {
			text-decoration: none;
			font-size: 150%;
		}

		a:hover {
			color: red;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="content">
			<div class="title" title="Laragon">Selamat Datang di <br>Dashboard Admin</div>
		</div>

		<div class="opt">
			<div>Silahkan <a title="Getting Started" href="<?= site_url('loginhotel/index') ?>">login</a> terlebih dahulu untuk melanjutkan!</div>
		</div>

	</div>
</body>

</html>
