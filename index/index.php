<?php
  require("../config/koneksi.php")

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/newstyle.css">
    <!-- icon -->
    <link rel="shortcut icon" href="../aset/icon.ico">

    <title>SIANI - Siswa</title>
    </head>

    <body>
      <div class="container">


        <div class="header">

          <div class="wellcome text-white">
            <img src="../aset/logo2.png" height="40px" alt="logo siani">
            <div class="line">

            </div>
            <h2>Selamat datang di SIANI</h2>
            <a class="nav-color jenis-font link-active" href="#">
              <img src="../aset/users.png" height="25px" alt="">
               Users
            </a>

            <div class="btn-group dropleft">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Options
              </button>
              <div class="dropdown-menu">
                  <!-- Dropdown menu links -->
                  <a class="dropdown-item" href="../logout.php">log-out</a>
                  <a class="dropdown-item" href="../gantipassword.php">ganti password</a>
                </div>
            </div>
          </div>
        </div>

          <div class="sidebar">
            <div class="profil">
              <img src="../aset/profil.jpg" class="rounded-circle" height="80px" alt="foto profil">

            </div>
            <!-- sidebar -->
            <div class="sidebar-menu">
            <ul>
              <li>
                <a class="nav-color jenis-font link-active" href="#">
                  <img src="../aset/users.png" height="25px" alt="">
                   Users
                </a>
              </li>
            </ul>

            </div>

          </div>

      </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
