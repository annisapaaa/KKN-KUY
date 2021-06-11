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
      margin-top: 120px;
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
    }

    .text-bottoms {
      margin-top: 10px;
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
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- Awal Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Cari partner <span>KKN</span>-mu<br> dengan mudah <span>disini!</span></h1>
    <a href="#form-utama" class="btn btn-primary tombol">Register</a>
  </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Awal Formulir -->
<div class="container">
  <form id="form-utama" method="POST" action="home.php">
    <div class="form-group nama-lengkap">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap anda">
    </div>

    <div class="form-group">
      <label>NIM</label>
      <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
    </div>

    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control" placeholder="Masukkan username">
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Masukkan email">
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" placeholder="Masukkan password">
    </div>

    <div class="form-group">
      <label>Jenis Kelamin</label>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="jeniskelamin" checked>
        <label class="custom-control-label" for="defaultGroupExample1">Laki-Laki</label>
      </div>

      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="jeniskelamin">
        <label class="custom-control-label" for="defaultGroupExample2">Perempuan</label>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Fakultas</label>
          <input type="text" name="fakultas" class="form-control" placeholder="Masukkan fakultas">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Jurusan</label>
          <input type="text" name="jurusan" class="form-control" placeholder="Masukkan jurusan">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Provinsi</label>
      <input type="text" name="provinsi" class="form-control" placeholder="Masukkan provinsi">
    </div>

    <div class="form-group">
      <label>Kabupaten/Kota</label>
      <input type="text" name="kabupaten" class="form-control" placeholder="Masukkan kabupaten/kota">
    </div>

    <div class="form-group">
      <label>Kecamatan</label>
      <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan kecamatan">
    </div>

    <div class="form-group">
      <label>Desa Tujuan KKN</label>
      <input type="text" name="desa" class="form-control" placeholder="Masukkan desa tujuan KKN">
    </div>

    <div class="form-group">
      <label>No. Whatsapp</label>
      <input type="number" name="whatsapp" class="form-control" placeholder="Masukkan no. whatsapp">
    </div>

    <button type="submit" name="daftar" class="btn btn-primary tombol-register">Register</button>

    <div class="text-bottoms">
      <p><a href="login.html">Have already an account? Login here</a></p>
    </div>

  </form>
</div>
<!-- Akhir Formulir -->

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