<!DOCTYPE HTML>
<html>
<head>
	<title>Aplikasi Input Nilai</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/bootstrap.js"></script>
</head>
<body>


<div class="container">

	<div class="row"></div>
		<div class="col-sm-8">
			<div class="page-header"><h1 align="center">Program Input Data Mahasiswa</h1></div>
			<form class="form-horizontal" action="proses.php" method="POST" role="form">
			<div class="form-group">
				<label for="nim" class="control-label col-sm-2">Nim</label>
				<div class="col-sm-7">
					<input type="text" name="nim" id="nim" class="form-control" placeholder="Inputkan NIM" required>
				</div>
			</div>
			
			<div class="form-group">
				<label for="nama" class="control-label col-sm-2">Nama</label>
				<div class="col-sm-7">
					<input type="text" name="nm" id="nm" class="form-control" placeholder="Inputkan Nama Lengkap Anda" required>
				</div>
			</div>
	
			<div class="form-group">
				<label for="alamat" class="control-label col-sm-2">Alamat</label>
				<div class="col-sm-7">
					<input type="text" name="alm" id="alm" class="form-control" placeholder="Inputkan Alamat lengkap Anda">
				</div>
			</div>
			
			<div class="form-group">
				<label for="jk" class="control-label col-sm-2">Jenis Kelamin</label>
				<div class="col-sm-2">
					<select class="form-control" name="jk" id="jk">
						<option value="">Jenis Kelamin</option>
						<option value="laki-laki">Laki-laki</option>
						<option value="perempuan">Perempuan</option>
					
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="jurusan" class="control-label col-sm-2">Jurusan</label>
				<div class="col-sm-7">
					<input type="text" name="jrs" id="jrs" class="form-control" placeholder="Jurusan Anda">
				</div>
			</div>
			
			<div class="form-group">
				<label for="mk" class="control-label col-sm-2">Mata Kuliah</label>
				<div class="col-sm-7">
					<input type="text" name="mk" id="mk" class="form-control" placeholder="Mata Kuliah Anda">
				</div>

			</div>
			
			<div class="form-group">
				<label for="kelas" class="control-label col-sm-2">Kelas</label>
				<div class="col-sm-2">
					<select class="form-control" name="kelas" id="kelas">
						<option value="">Pilih Kelas</option>
						<option value="Kelas1">Kelas1</option>
						<option value="Kelas2">Kelas2</option>
					
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="mk" class="control-label col-sm-2">Keterangan</label>
				<div class="col-sm-7">
					<textarea class="form-control" rows="6" name="ket" id="ket"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label for="nilai" class="control-label col-sm-2">Nilai</label>
				<div class="col-sm-7">
					<input type="text" name="nilai" id="nilai" class="form-control" placeholder="Inputkan Nilai Anda">
				</div>
			</div>
			
			<div class="form-group">
				<label for="mk" class="control-label col-sm-2"></label>
				<div class="col-sm-7">
					<button id="submit" name="submit" class="btn btn-danger btn-block">Submit</button>
				</div>

			</div>
			
		</div>
</div>



</body>

</html>