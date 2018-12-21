<!DOCTYPE HTML>
<html>
<head>
	<title>Laporan Nilai Mahasiswa</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/bootstrap.js"></script>
</head>

<body>

<div class="container">
	<div class="page-header" align="center"><h1>Laporan Nilai Mahasiswa</h1></div>
	<table class="table table-striped">
		<thead>
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Mata Kuliah</th>
			<th>Kelas</th>
			<th>Keterangan</th>
			<th>Nilai</th>
			<th>Hasil</th>
			<th>Edit</th>
			<th>Hapus</th>
		</thead>
		<tbody>
		<?php
		include 'koneksi.php';
		$sql="SELECT * FROM tabel_mahasiswa ORDER BY 'nim' ASC";
		$jalan= mysql_query($sql);
		while ($rows= mysql_fetch_array($jalan)) {
			
			echo '
			<tr>
			<td>'.$rows['nim'].'</td>
			<td>'.$rows['nama'].'</td>
			<td>'.$rows['alamat'].'</td>
			<td>'.$rows['jk'].'</td>
			<td>'.$rows['jurusan'].'</td>
			<td>'.$rows['mata_kuliah'].'</td>
			<td>'.$rows['kelas'].'</td>
			<td>'.$rows['ket'].'</td>
			<td>'.$rows['nilai'].'</td>
			<td>'.$rows['hasil'].'</td>
			<td><a class="btn btn-info btn-xs">Edit</td>
			<td><a class="btn btn-warning btn-xs">Hapus</td>
			</tr>
			';
			
		}
		
		?>
		
		</tbody>
	</table>
	
	<a class="btn btn-info btn-sm" href="index.php">Tambah Data</a>
	
</div>

</body>

</html>