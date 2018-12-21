<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "siani";

$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
		die("Koneksi gagal: " . mysqli_connect_error());
}
 ?>
