<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['password']);
echo "<script>
		alert('Berhail Logout');
		window.location.href='login.php';
	  </script>";
 ?>
