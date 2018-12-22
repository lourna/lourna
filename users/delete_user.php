<?php
    include '../koneksi.php';

    $id_user = $_GET['id_user'];
    //$query = "DELETE FROM 'tbl_user' WHERE 'id'=$id";
    //echo $query;
   $query = mysqli_query($con, "DELETE FROM users WHERE id_user=$id_user");
   if (mysqli_query) {
     // code...
   }

   header ("location:data_user.php");

?>
