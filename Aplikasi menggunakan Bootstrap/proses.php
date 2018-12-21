<?php
	$nim=$_POST['nim'];
	$nm=$_POST['nm'];
	$alm=$_POST['alm'];
	$jk=$_POST['jk'];
	$jrs=$_POST['jrs'];
	$mk=$_POST['mk'];
	$kelas=$_POST['kelas'];
	$ket=$_POST['ket'];
	$nilai=$_POST['nilai'];
	
	if ($nilai >= 85) {$hasil = "A";}
	else if ($nilai >= 80) {$hasil = "A-";}
	else if ($nilai >= 75) {$hasil = "B+";}
	else if ($nilai >= 70) {$hasil = "B";}
	else if ($nilai >= 65) {$hasil = "B-";}
	else if ($nilai >= 60) {$hasil = "C+";}
	else {$hasil = "gagal";}
	
		
	include"koneksi.php";
	$query = "INSERT INTO tabel_mahasiswa values('$nim','$nm','$alm','$jk','$jrs','$mk','$kelas','$ket','$nilai','$hasil')";
	
	$result = mysql_query($query) or die('GAGAL MENYIMPAN DATA <meta http-equiv=refresh content=1;url=index.php>' );
	//echo "DATA BERHASIL DISIMPAN";
	//echo "<meta http-equiv=refresh content=1;url=index.php>";
	
	
	
?>

 
 
<form id="form1" name="form1" method="post" action="">
  <table width="440" border="0" align="center">
    <td colspan="13" align="center">Data Mahasiswa</td>
    <tr>
      <td width="114">&nbsp;</td>
      <td width="11">&nbsp;</td>
      <td width="293">&nbsp;</td>
    </tr>
    <tr>
      <td>Nim</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$nim"; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$nm"; ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$alm"; ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$jk"; ?></td>
    </tr>
    <tr>
      <td>Jurusan</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$jrs"; ?></td>
    </tr>
    <tr>
      <td>Mata Kuliah</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$mk"; ?></td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$kelas"; ?></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$ket"; ?></td>
    </tr>
    <tr>
      <td>Nilai</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$nilai"; ?></td>
    </tr>
    <tr>
      <td>Keterangan Nilai</td>
      <td>:</td>
      <td>&nbsp;<?php echo "$hasil"; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><a href="laporan.php">Laporan</a></td>
    </tr>
    
  </table>

</form>

</body>
</html>