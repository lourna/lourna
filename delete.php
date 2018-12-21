<?php
    include 'config/koneksi.php';

    $id_user = $_GET['id_user'];
    //$query = "DELETE FROM 'tbl_user' WHERE 'id'=$id";
    //echo $query;
   $query = mysqli_query($koneksi, "DELETE FROM users WHERE id_user=$id_user");

   header ("location:admin/index.php");

?>
