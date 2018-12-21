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

    <title>SIANI - insert</title>
    </head>

    <body class="bg-dark">
    <div class="container">
      <div class="card card-insert mx-auto mt-3">
        <div class="card-header text-center">Masukan User Baru</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
              <input type="text" id="nama" class="form-control" placeholder="nama" required="required" autofocus="autofocus" name="nama" >
                <label for="nama">Nama</label>
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

            <a class="btn btn-primary center" href="" Name="insert">Insert</a>
          </form>

          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>
