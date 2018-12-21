<?php
  require ("config/koneksi.php")
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="aset/favicon1.ico">

    <title>SIANI - insert</title>
    </head>

    <body class="bg-dark">
    <div class="container">
      <div class="card card-insert mx-auto mt-5">
        <div class="card-header text-center">Insert User Baru</div>
        <div class="card-body">
          <form>
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
                <input type="text" id="group" class="form-control" placeholder="group" required="required" autofocus="autofocus" name="group" >
                <label for="group">Group</label>
              </div>
            </div>
            <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="name" class="form-control" placeholder="name" required="required" autofocus="autofocus" name="name" >
                <label for="name">Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <a class="btn btn-primary center" href="insertquery.php">Insert</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
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
