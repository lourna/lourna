<?php
  require '../config/koneksi.php';

  function tambahAdmin($data){

    $user_name = $data["user_name"];
    $password = $data["password"];
    $level = $data["level"];

    // query insert data
    $query = " INSERT INTO users
                  ("id_user","user_name", "password", "level")
                  VALUES
                  ('', '$user_name', '$password', '$level')
                  ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);

  }
?>
