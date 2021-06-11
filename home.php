<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$fakultas = $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];
	$provinsi = $_POST['provinsi'];
	$kabupaten = $_POST['kabupaten'];
	$kecamatan = $_POST['kecamatan'];
	$desa = $_POST['desa'];
	$whatsapp = $_POST['whatsapp'];


	// buat query
  $query = pg_query("INSERT INTO userkkn (nama, nim, username, email, password, jeniskelamin, fakultas, jurusan, provinsi, kabupaten, kecamatan, desa, whatsapp) VALUES ('$nama', '$nim', '$username', '$email', '$password', '$jeniskelamin', '$fakultas', '$jurusan', '$provinsi', '$kabupaten', '$kecamatan', '$desa', '$whatsapp')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: profil.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: profil.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
