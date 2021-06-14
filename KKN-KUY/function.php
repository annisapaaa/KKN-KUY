<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "partnerkkn";

//koneksi ke database mysql,
$koneksi = mysqli_connect($server,$user,$password,$db);

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data) {
	global $koneksi;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT username FROM daftar WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
		alert('username sudah terdaftar!');
		</script>";
		return false;
	}

	//cek konfirmasi password
	if($password !== $password2) {
		echo "<script>
		alert('Konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke database
	mysqli_query($koneksi, "INSERT INTO daftar VALUES('', '$username', '$password')");

	return mysqli_affected_rows($koneksi);

}

?>