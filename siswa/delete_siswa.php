
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        include '../koneksi.php';

        $nis = $_GET['nis'];
        //$query = "DELETE FROM 'tbl_user' WHERE 'id'=$id";
        //echo $query;
       $query = mysqli_query($con, "DELETE FROM siswa WHERE nis=$nis");
        if (mysqli_query($con, $query)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($con);
        }

       header ("location:data_siswa.php");

    ?>
    <script type="text/javascript">
        function konfirm() {
        tanya = confirm("Anda yakin ?");
        if (tanya == true) return true;
        else return false;
        }
    </script>
</body>
</html>