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
    <link rel="stylesheet" href="../css/style.css">
    <!-- icon -->
    <link rel="shortcut icon" href="../aset/favicon1.ico">

    <title>SIANI - Siswa</title>
    </head>
  <body>

           <!-- Logo SIANI kiri atas cuuy -->
      <nav class="navbar navbar-dark bg-primary fixed-top shadow-sm">
        <div class="navbar-header">
          <a class="navbar-brand" href="">
            <img src="../aset/logo2.png" height="40" position="relative" class="d-inline-block align-top logo-position" title="siani" alt="">
            <div class="line">
            </div>
          </a>
          <h1 class="wellcome-position  text-white">
            Selamat datang "..." di SIANI MAN 4 Banyuwangi
          </h1>
        </div>

          <!-- Default dropleft button -->
            <div class="btn-group dropleft">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../aset/bars.png" width="25px" alt="options" title="options">
              </button>
            <div class="dropdown-menu">

                <!-- Dropdown menu links -->
                <a class="dropdown-item" href="../logout.php">log-out</a>
                <a class="dropdown-item" href="../gantipassword.php">ganti password</a>
              </div>
            </div>
        </div>
      </nav>

      <!-- content -->
    <div id="wrapper">
      <!-- sidebar -->
      <nav class="bg-blue sidebar position-fixed">
        <div class="sidebar-sticky">
          <img src="../aset/profil.jpg" class="rounded-circle foto-profil shadow" height="100px" alt="">
          <span class="nama jenis-font text-white text-right dropright"> Nama Siswa</span>
          <ul class="nav nav-top flex-column">
            <li class="nav-item ">
              <a class="nav-color  jenis-font link-active" href="#">
                <img src="../aset/student.png" height="25px" alt="">
                 Biodata
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="kompetensi.php">
                <img src="../aset/kompetensi.png" height="25px" alt="">
                 Niai Kompetensi
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="raport.php">
                <img src="../aset/raport.png" height="25px" alt="">
                 Raport
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="grafik.php">
                <img src="../aset/grafik.png" height="25px" alt="">
                 Grafik
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- container -->
      <div id="content-wrapper">
        <div class="container-fluid">
          <div class="card mb-3">
            <!-- ngisi kode di sini -->
            <div class="card mb-3">
              <div class="card-header">
                <h2 class="text-center">
                  Bio Data
                </h2>
              </div>
<!-- querynya bio data brooh -->
<?php

  // require ("../login.php")
  $result = mysqli_query($koneksi, "SELECT  first_name, last_name, kelas, jurusan, wali_murid, hp_wali FROM hasil_nilai LEFT JOIN  siswa ON hasil_nilai.nis=siswa.nis LEFT JOIN section ON hasil_nilai.id_section=section.id_section LEFT JOIN kelas ON section.kd_kelas=kelas.kd_kelas INNER JOIN jurusan ON kelas.id_jurusan=jurusan.id_jurusan where user_name = '$_POST[username]' AND password = '$_POST[password]'");
?>
<?php $row = mysqli_fetch_assoc($result); ?>
              <table border="0" cellpadding="10" cellspacing="0">
                <tbody>

                  <tr>
                    <th><h4>Nama</h4></th>
                    <td><?= $row["first_name"]; ?> <?= $row["last_name"]; ?></td>
                  </tr>

                  <tr>
                    <th><h4>Kelas</h4></th>
                    <td><?= $row["kelas"]; ?></td>
                  </tr>
                  <tr>
                    <th><h4>Jurusan</h4></th>
                    <td><?= $row["jurusan"]; ?></td>
                  </tr>
                  <tr>
                    <th><h4>Wali Murid</h4></th>
                    <td><?= $row["wali_murid"]; ?></td>
                  </tr>

                  <tr>
                    <th><h4>Hp Wali Murid</h4></th>
                    <td><?= $row["hp_wali"]; ?></td>
                  </tr>
                </tbody>

              </table>

              <h4>

                </h4>
            </div>
          </div>
        </div>
      </div>
        <!-- <footer class="sticky-footer bottom" id="layer">
          <div class="container my-auto">
            <div class="Copyright text-center bottom">
                <span> @Copyright Siani 2018</span>
            </div>
          </div>
        </footer> -->
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
