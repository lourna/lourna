 <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIANI - Login</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="aset/favicon1.ico">

  </head>

  <body class="bg-dark">
    <?php
        session_start();
        include 'koneksi.php';
        if (isset($_POST['submit'])) {
            $query = mysqli_query($con, "SELECT * FROM users WHERE user_name = '$_POST[username]' AND password = '$_POST[password]'");
            $value = mysqli_fetch_assoc($query);
            $cek = mysqli_num_rows($query);
            if ($cek > 0) {
                $_SESSION['id_user'] = $value['id_user'];
                $_SESSION['username'] = $value['user_name'];
                $_SESSION['level'] = $value['level'];


                if ($_SESSION['level'] == "admin") {
                	// echo "Selamat datang admin <br>";
                	// echo $_SESSION['username'];
                  echo "<script>
                          alert('Selamat datang admin, Anda Berhasil login ');
                          window.location.href='admin/index.php';
                        </script>";

                }
                else{
                	// echo "Selamat datang user <br>";
                	// echo $_SESSION['username'] . "<br>";
                	// echo $_SESSION['level'];
                  echo "<script>
                          alert('Berhasil login ');
                          window.location.href='siswa/index.php';
                        </script>";
                }


            }
            else{
                echo "<script>
                        alert('Username atau password salah ! ');
                      </script>";
            }

        }
     ?>
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center">
          <img src="aset/logo.png" width="120px" alt=""></div>
        <div class="card-body">
          <form action="" method="post">
            <div class=" form-group">
              <div class="form-label-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="User Name" required="required" autofocus="autofocus">
                <label for="username">User Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="password" required="required">
                <label for="password">Password</label>
              </div>
            </div>

            <button type="submit" class="btn btn-primary " name="submit" value="submit">login</button>

            <!-- <a Name="login" value="submit" class="btn btn-primary btn-block"  href="siswa/index.php">Login</a> -->
          </form>
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
