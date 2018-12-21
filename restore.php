<?php
$connection = mysqli_connect('localhost','root','','siani');
$filename = 'backup.sql';
$handle = fopen($filename,"r+");
$contents = fread($handle,filesize($filename));
$sql = explode(';',$contents);
foreach($sql as $query){
  $result = mysqli_query($connection,$query);
  if($result){
    echo "<script>
            alert('Data Berhasil Dibackup');
            window.location.href='admin/index.php';
          </script>";
      // echo '<tr><td><br></td></tr>';
      // echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
      // echo '<tr><td><br></td></tr>';
  }
}
fclose($handle);

?>
