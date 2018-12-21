<?php
  require ("../config/koneksi.php")
  // require ("function.php")
  //
  //
  // if (isset($_POST['submit'])) {
  //   require ('function.php')
  //   // cek apakah data berhasil di inputkan
  //   if (tambahAdmin($data) > 0 ) {
  //     echo "data berhasi ditambahkan";
  //   }
  //   else {
  //     echo "data gagal ditambahkan";
  //   }
  //
  // }
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
            Selamat datang <a href="#"></a> di SIANI
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
              <a class="nav-color jenis-font link-active" href="#">
                <img src="../aset/guru.png" height="25px" alt="">
                 Data Guru
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-color jenis-font " href="mapel.php">
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
                Data Users

              </div>

                      <?php
                      $result = mysqli_query($koneksi, "SELECT users.id_user, first_name, last_name, user_name, password, kelas, jurusan, level FROM users LEFT JOIN siswa ON users.id_user=siswa.id_user LEFT JOIN hasil_nilai ON siswa.nis=hasil_nilai.nis LEFT JOIN section ON hasil_nilai.id_section=section.id_section LEFT JOIN kelas ON section.kd_kelas=kelas.kd_kelas LEFT JOIN jurusan ON kelas.id_jurusan=jurusan.id_jurusan");
                      ?>

            <div class="card-body">
              <div class="table-responsive">


                    <!-- Dropdown menu links -->

                      <?php
                      $result = mysqli_query($koneksi, "SELECT  guru.id_guru, guru, no_hp, email, mapel FROM  section LEFT JOIN guru ON section.id_guru=guru.id_guru LEFT JOIN mapel ON section.kd_mapel=mapel.kd_mapel;");
                      ?>
               

                  <!-- Button trigger modal -->
                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSiswa">
                    Tambah Data Siswa
                  </button> -->
                  <table border="0" width="100%">
                  <td><button type="button" class="btn btn-primary buttonpos" data-toggle="modal" data-target="#modalAdmin">
                    Tambah Data Guru
                  </button></td>

                  <td><form action="" method="POST">
                        <div class="input-group" style="margin-right: 25px;">
                          <input type="text" name="cari" class="form-control input-sm" placeholder="Cari berdasarkan nama ...">
                          <button type="button" class="btn btn-primary buttonpos" data-toggle="modal" data-target="#modalAdmin">
                    Cari
                  </button>
                        </div>
                      </form>
                    </td>

                </table>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>id</th>
                      <th>Nama Guru</th>
                      <th>No Hp</th>
                      <th>Email</th>
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
                      <td><?= $row["id_guru"]; ?></td>
                      <td><?= $row["guru"]; ?></td>
                      <td><?= $row["no_hp"]; ?></td>
                      <td><?= $row["email"]; ?></td>
                      <td><?= $row["mapel"]; ?></td>
                     
                      <td> <center>
                        <button type="button" class="btn btn-success buttonpos btn-sm" data-toggle="modal" data-target="#modalEdit">
                          Edit
                        </button>&nbsp;
                        <a href="../delete.php?id_user=<?php echo $row['id_user'];?>" type="button" class="btn btn-danger btn-sm" name="button">Hapus</a>&nbsp;
                      </center>

                        <!-- <a href="../insert.php?id_user=<?php echo $row['id_user'];?>">Ubah</a>&nbsp; | -->
                        <!-- <a href="../delete.php?id_user=<?php echo $row['id_user'];?>">Hapus</a>&nbsp; -->
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

        <!-- Modal -->
        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data User Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="nama" class="form-control" placeholder="nama" required="required" autofocus="autofocus" name="nama" >
                      <label for="nama">Nama</label>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="user_name" class="form-control" placeholder="user name" required="required" autofocus="autofocus" name="user_name" >
                      <label for="user_name">User Name</label>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="password" class="form-control" placeholder="password" required="required" autofocus="autofocus" name="password" >
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="kelas" class="form-control" placeholder="kelas" required="required" autofocus="autofocus" name="kelas" >
                      <label for="kelas">Kelas</label>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="level" class="form-control" placeholder="level" required="required" autofocus="autofocus" name="level" >
                      <label for="level">Level</label>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukan Data Guru Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
  <?php if (isset($_POST['submit'])) {
    // code...

    $id_guru = $_POST["id_guru"];
    $guru = $_POST["guru"];
    $no_hp = $_POST["no_hp"];
    $email = $_POST["email"];

    // queryinsert datan
    $query  = "INSERT INTO Users
                VALUES
                ('$id_guru', '$guru','no_hp', '$lemail')
                ";
    mysqli_query($koneksi, $query);

  } ?>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="id_user" class="form-control" placeholder="id_user" required="required" autofocus="autofocus" name="id_user" >
                      <label for="id_user">ID USERS</label>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="user_name" class="form-control" placeholder="user_name" required="required" autofocus="autofocus" name="user_name" >
                      <label for="user_name">User Name</label>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="password" class="form-control" placeholder="password" required="required" autofocus="autofocus" name="password" >
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                      <input type="text" id="level" class="form-control" placeholder="level" required="required" autofocus="autofocus" name="level" >
                      <label for="level">Level</label>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary" name="submit">Masukan Data</button>
              </div>
            </div>
          </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
