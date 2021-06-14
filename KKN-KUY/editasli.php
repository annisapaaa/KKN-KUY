<?php include('function.php'); ?>

<?php
		//jika sudah mendapatkan parameter GET id dari URL
if(isset($_GET['Nim'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
	$Nim = $_GET['Nim'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
	$select = mysqli_query($koneksi, "SELECT * FROM user WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
	if(mysqli_num_rows($select) == 0){
		echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
		exit();
			//jika hasil query > 0
	}else{
				//membuat variabel $data dan menyimpan data row dari query
		$data = mysqli_fetch_assoc($select);
	}
}
?>

<?php
		//jika tombol simpan di tekan/klik
if(isset($_POST['submit'])){
	$Nama_Mhs			  = $_POST['Nama_Mhs'];
	$Jenis_Kelamin	= $_POST['Jenis_Kelamin'];
	$Program_Studi	= $_POST['Program_Studi'];
	$Asal_Daerah	= $_POST['Asal_Daerah'];
	$Desa	= $_POST['Desa'];
	$Whatsapp	= $_POST['Whatsapp'];

	$sql = mysqli_query($koneksi, "UPDATE user SET Nama_Mhs='$Nama_Mhs', Jenis_Kelamin='$Jenis_Kelamin', Program_Studi='$Program_Studi', Asal_Daerah='$Asal_Daerah', Desa='$Desa', Whatsapp='$Whatsapp' WHERE Nim='$Nim'") or die(mysqli_error($koneksi));

	if($sql){
		echo '<script>alert("Berhasil menyimpan data."); document.location="indexasli.php";</script>';
	}else{
		echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
	}
}
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
			color: black;
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

		.tombol-simpan {
			margin-top: 10px;
			margin-bottom: 30px;
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

	<form action="editasli.php?Nim=<?php echo $Nim; ?>" method="post">
		<div class="container">
			<center><font size="6">Edit Data</font></center>
			<hr>
			<div class="form-group row">
				<label for="inputnim" class="col-sm-2 col-form-label">NIM</label>
				<div class="col-sm-10">
					<input type="text" name="Nim" class="form-control" id="inputnim" placeholder="Masukkan NIM" value="<?php echo $data['Nim']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputnama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
				<div class="col-sm-10">
					<input type="text" name="Nama_Mhs" class="form-control" id="inputnama" placeholder="Masukkan Nama" value="<?php echo $data['Nama_Mhs']; ?>" required>
				</div>
			</div>
			<fieldset class="form-group">
				<div class="row">
					<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
					<div class="col-sm-10">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="Jenis_Kelamin" id="laki" value="Laki-Laki" <?php if($data['Jenis_Kelamin'] == 'Laki-Laki'){ echo 'checked'; } ?> checked required>
							<label class="form-check-label" for="laki">
								Laki-Laki
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="Jenis_Kelamin" id="perempuan" value="Perempuan" <?php if($data['Jenis_Kelamin'] == 'Perempuan'){ echo 'checked'; } ?> required>
							<label class="form-check-label" for="perempuan">
								Perempuan
							</label>
						</div>
					</div>
				</div>
			</fieldset>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Program Studi</label>
				<div class="col-sm-10">
					<select name="Program_Studi" class="form-control" required>
						<option value="Statistika dan Sains Data" <?php if($data['Program_Studi'] == 'Statistika dan Sains Data'){ echo 'selected'; } ?>>Statistika dan Sains Data</option>
						<option value="Meteorologi Terapan" <?php if($data['Program_Studi'] == 'Meteorologi Terapan'){ echo 'selected'; } ?>>Meteorologi Terapan</option>
						<option value="Biologi" <?php if($data['Program_Studi'] == 'Biologi'){ echo 'selected'; } ?>>Biologi</option>
						<option value="Kimia" <?php if($data['Program_Studi'] == 'Kimia'){ echo 'selected'; } ?>>Kimia</option>
						<option value="Matematika" <?php if($data['Program_Studi'] == 'Matematika'){ echo 'selected'; } ?>>Matematika</option>
						<option value="Ilmu Komputer" <?php if($data['Program_Studi'] == 'Ilmu Komputer'){ echo 'selected'; } ?>>Ilmu Komputer</option>
						<option value="Fisika" <?php if($data['Program_Studi'] == 'Fisika'){ echo 'selected'; } ?>>Fisika</option>
						<option value="Biokimia" <?php if($data['Program_Studi'] == 'Biokimia'){ echo 'selected'; } ?>>Biokimia</option>
						<option value="Aktuaria" <?php if($data['Program_Studi'] == 'Aktuaria'){ echo 'selected'; } ?>>Aktuaria</option>
						<option value="Teknik Pertanian dan Biosistem" <?php if($data['Program_Studi'] == 'Teknik Pertanian dan Biosistem'){ echo 'selected'; } ?>>Teknik Pertanian dan Biosistem</option>
						<option value="Teknologi Pangan" <?php if($data['Program_Studi'] == 'Teknologi Pangan'){ echo 'selected'; } ?>>Teknologi Pangan</option>
						<option value="Teknik Industri Pertanian" <?php if($data['Program_Studi'] == 'Teknik Industri Pertanian'){ echo 'selected'; } ?>>Teknik Industri Pertanian</option>
						<option value="Teknik Sipil dan Lingkungan" <?php if($data['Program_Studi'] == 'Teknik Sipil dan Lingkungan'){ echo 'selected'; } ?>>Teknik Sipil dan Lingkungan</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Asal Daerah</label>
				<div class="col-sm-10">
					<select name="Asal_Daerah" class="form-control" required>
						<option value="">Pilih Asal Daerah</option>
						<option value="Sumatera" <?php if($data['Asal_Daerah'] == 'Sumatera'){ echo 'selected'; } ?>>Sumatera</option>
						<option value="Jakarta" <?php if($data['Asal_Daerah'] == 'Jakarta'){ echo 'selected'; } ?>>Jakarta</option>
						<option value="Jawa" <?php if($data['Asal_Daerah'] == 'Jawa'){ echo 'selected'; } ?>>Jawa</option>
						<option value="Kalimantan" <?php if($data['Asal_Daerah'] == 'Kalimantan'){ echo 'selected'; } ?>>Kalimantan</option>
						<option value="Sulawesi" <?php if($data['Asal_Daerah'] == 'Sulawesi'){ echo 'selected'; } ?>>Sulawesi</option>
						<option value="Nusa Tenggara" <?php if($data['Asal_Daerah'] == 'Nusa Tenggara'){ echo 'selected'; } ?>>Nusa Tenggara</option>
						<option value="Bali" <?php if($data['Asal_Daerah'] == 'Bali'){ echo 'selected'; } ?>>Bali</option>
						<option value="Papua" <?php if($data['Asal_Daerah'] == 'Papua'){ echo 'selected'; } ?>>Papua</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputdesa" class="col-sm-2 col-form-label">Desa Tujuan KKN</label>
				<div class="col-sm-10">
					<input type="text" name="Desa" class="form-control" id="inputdesa" placeholder="Masukkan Desa Tujuan" value="<?php echo $data['Desa']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputnomor" class="col-sm-2 col-form-label">No. Whatsapp</label>
				<div class="col-sm-10">
					<input type="number" name="Whatsapp" class="form-control" id="nomor" placeholder="Masukkan Nomor Whatsapp" value="<?php echo $data['Whatsapp']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" name="submit" class="btn btn-primary tombol-simpan">Simpan</button>
					<button type="submit" class="btn btn-default tombol-simpan"><a href="indexasli.php">Kembali</a></button>
				</div>
			</div>
		</div>
	</form>

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