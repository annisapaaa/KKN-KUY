<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

	<style>
		/* Navbar */
		.navbar {
			position: relative;
			z-index: 1;
		}

		.navbar-brand {
			font-family: 'Viga', sans-serif;
			font-size: 32px;
		}

		/* Utility */
		.tombol {
			text-transform: uppercase;
			border-radius: 40px;
		}

		/* Jumbotron */
		.jumbotron {
			background-image: url(img/slider2.jpg);
			background-size: cover;
			height: 540px;
			text-align: center;
			position: relative;
		}

		.jumbotron .container {
			z-index: 1;
			position: relative;
		}

		.jumbotron::after {
			content: '';
			display: block;
			width: 100%;
			height: 60%;
			background-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0));
			position: absolute;
			bottom: 0;
		}

		.jumbotron .display-4 {
			color: white;
			margin-top: 170px;
			font-weight: 200;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
			font-size: 40px;
			margin-bottom: 30px;
		}

		.jumbotron .display-4 span {
			font-weight: 500;
		}

		/* Formulir */
		.nama-lengkap{
			padding-top: 50px;
		}

		.tombol-register {
			margin-top: 20px;
			margin-bottom: 50px;
		}

		/* Footer */
		.text-unique {
			text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
		}

		/* DEKSTOP VERSION */
		@media (min-width: 992px) {
			.navbar-brand, .nav-link {
				color: white !important;
				text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
			}

			.nav-link {
				text-transform: uppercase;
				margin-right: 30px;
			}

			.nav-link:hover::after {
				content: '';
				display: block;
				border-bottom: 3px solid #0B63DC;
				width: 50%;
				margin: auto;
				padding-bottom: 5px;
				margin-bottom: -8px;
			}

			.jumbotron {
				margin-top: -75px;
				height: 640px;
			}

			.jumbotron .display-4 {
				font-size: 62px;
			}
		}
	</style>

	<title>KKN KUY!</title>
</head>
<body>
	<!-- Awal Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="#">KKN KUY!</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="#">Beranda <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#">Profil</a>
					<a class="nav-item btn btn-primary tombol" href="#">Log Out</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- Akhir Navbar -->

	<!-- Awal Jumbotron -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Cari partner <span>KKN</span>-mu<br> dengan mudah <span>disini!</span></h1>
		</div>
	</div>
	<!-- Akhir Jumbotron -->

	<!-- Awal Pencarian -->
	<div class="container">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Nama</th>
					<th scope="col">Jurusan</th>
					<th scope="col">Fakultas</th>
					<th scope="col">Provinsi</th>
					<th scope="col">Kabupaten/Kota</th>
					<th scope="col">Kecamatan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
					<td>@mdo</td>
					<td>@mdo</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
					<td>@mdo</td>
					<td>@mdo</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
					<td>@mdo</td>
					<td>@mdo</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
					<td>@mdo</td>
					<td>@mdo</td>
					<td>@mdo</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- Akhir Pencarian -->

	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	<!-- Awal Footer -->
	<footer class="bg-primary text-center text-lg-start">
		<div class="text-center text-light text-unique p-3" style="background-image: url(img/a.png);">
			IPB UNIVERSITY 2021
		</div>
	</footer>
	<!-- Akhir Footer -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>