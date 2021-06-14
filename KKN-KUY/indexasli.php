<?php 
session_start();

include('function.php'); 

?>

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
	<link rel="icon" href="assets/images/ipb.png" type="image/ico" />

	<style>
		/* Navbar */
		.navbar {
			position: relative;
			z-index: 1;
		}

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
			background-image: url(assets/images/Landingpage.png);
			background-size: cover;
			text-align: center;
			height: 280px;
			width: 100%
			margin-top: 30px;
			margin-bottom: 30px;
			align-items: center;
		}

		.jumbotron .display-4 {
			color: #241571;
			margin-top: 10px;
			font-weight: 200;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
			font-size: 50px;
			margin-bottom: 30px;
		}

		.jumbotron .display-4 span {
			font-weight: 500;
		}

		.logo {
			padding-bottom: 5px;
		}

		.foot {
			margin-top: 20px;
		}

	</style>

	<title>KKN KUY</title>
</head>
<body>
	<!-- Awal Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div class="container">
			<a class="navbar-brand" href="indexasli.php">
				<img src="assets/images/ipb.png" width="50" height="50" class="d-inline-block align-center logo" alt="">
				KKN KUY
			</a>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="indexasli.php">Beranda <span class="sr-only">(current)</span></a>
					<a class="nav-item btn btn-primary tombol" href="logoutasli.php">Log Out</a>
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

	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<a href="tambahasli.php"><button class="btn btn-dark right">Tambah Data</button></a><br><br>
		<input class="form-control" id="myInput" type="text" placeholder="Cari Mahasiswa..."><br>
		<div class="table-responsive">
			<table class="table table-striped jambo_table bulk_action">
				<thead>
					<tr>
						<th>NO.</th>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Jenis Kelamin</th>
						<th>Program Studi</th>
						<th>Asal Daerah</th>
						<th>Desa Tujuan KKN</th>
						<th>No. Whatsapp</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="myTable">
					<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
					$sql = mysqli_query($koneksi, "SELECT * FROM user ORDER BY Nim ASC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
					if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
						$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
						while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
							echo '
							<tr>
							<td>'.$no.'</td>
							<td>'.$data['Nim'].'</td>
							<td>'.$data['Nama_Mhs'].'</td>
							<td>'.$data['Jenis_Kelamin'].'</td>
							<td>'.$data['Program_Studi'].'</td>
							<td>'.$data['Asal_Daerah'].'</td>
							<td>'.$data['Desa'].'</td>
							<td>'.$data['Whatsapp'].'</td>
							<td>
							<a href="editasli.php?Nim='.$data['Nim'].'" class="btn btn-secondary btn-sm">Edit</a>
							<a href="deleteasli.php?Nim='.$data['Nim'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
							</tr>
							';
							$no++;
						}
				//jika query menghasilkan nilai 0
					}else{
						echo '
						<tr>
						<td colspan="6">Tidak ada data.</td>
						</tr>
						';
					}
					?>
					<tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Awal Pagination -->
		
		<!-- Akhir Pagination -->

		<!-- Awal Footer -->
		<footer class="bg-dark text-center text-lg-start foot">
			<div class="text-center text-light text-unique p-3">
				@COPYRIGHT IPB UNIVERSITY 2021
			</div>
		</footer>
		<!-- Akhir Footer -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- JQUERY TAMBAHAN -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Search -->
		<script>
			$(document).ready(function(){
				$("#myInput").on("keyup", function() {
					var value = $(this).val().toLowerCase();
					$("#myTable tr").filter(function() {
						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					});
				});
			});
		</script>
	</body>
	</html>