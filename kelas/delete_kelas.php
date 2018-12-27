<?php
    include '../koneksi.php';

    $kode_kelas = $_GET['kode_kelas'];
    //$query = "DELETE FROM 'tbl_kelas' WHERE 'kode_kelas'=$kode_kelas";
    //echo $query;
   $query = mysqli_query($con, "DELETE FROM kelas WHERE kode_kelas=$kode_kelas");
    if (mysqli_query($con, $query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

   header ("location:data_kelas.php");

?>
