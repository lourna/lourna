<?php
  require ("../config/koneksi.php")
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
    <link rel="shortcut icon" href="../aset/favicon1.ico">

    <title>SIANI - Admin</title>
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
          <img src="../aset/admin.png" class="rounded-circle foto-profil shadow" height="100px" alt="">
          <span class="nama jenis-font text-white text-right dropright"> Admin</span>
          <ul class="nav nav-top flex-column">
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="index.php">
                <img src="../aset/users.png" height="25px" alt="">
                 Users
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color  jenis-font " href="siswa.php">
                <img src="../aset/student.png" height="25px" alt="">
                 Data Siswa
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="guru.php">
                <img src="../aset/guru.png" height="25px" alt="">
                 Data Guru
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font link-active" href="#">
                <img src="../aset/mapel.png" height="25px" alt="">
                 Mata Pelajaran
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
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="nilai.php">
                <img src="../aset/nilai.png" height="25px" alt="">
                 Input Nilai
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

            <div class="card-header font-weight-bold">
                Data Mata Pelajaran

                </div>

                        <?php
                        $result = mysqli_query($koneksi, "SELECT*FROM mapel");
                        ?>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                      <tr class="text-center">
                        <th>No</th>
                        <th>Kode Mata Pelajaran</th>
                        <th>Mata Pelajaran</th>
                        <th>Action</th>

                      </tr>
                    </thead>
    <?php
    while( $row = mysqli_fetch_assoc($result)) :
    ?>
                    <tbody>
                      <tr>
                        <td>no</td>
                        <td><?= $row["kd_mapel"]; ?></td>
                        <td><?= $row["mapel"]; ?></td>
                        <td>
                          <a href="../insert.php?kd_mapel=<?php echo $row['kd_mapel'];?>">Ubah</a>&nbsp; |
                          <a href="../delete.php?kd_mapel=<?php echo $row['kd_mapel'];?>">Hapus</a>&nbsp;
                        </td>

                      </tr>
    <?php endwhile; ?>
                    </tbody>
                  </table>

            </div>
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
