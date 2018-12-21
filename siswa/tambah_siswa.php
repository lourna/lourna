<?php session_start();
if (empty($_SESSION['username']) && empty($_SESSION['level'])) {
	echo "<script>
		alert('Anda harus login dahulu !');
		window.location.href='../login.php';
	</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
	<title>Data Siswa | SIANI</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- style css -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<!--<link rel="stylesheet" href="assets/css/demo.css">-->
	<!-- GOOGLE FONTS -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
	<!-- ICONS -->
	<link rel="shortcut icon" href="../assets/img/icon.ico">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<?php
			include '../dashboard/navbar.php';
			include '../dashboard/left_sidebar.php';

			$nis_err = $first_name_err = $last_name_err = $kelas_err = $tgl_lahir_err = $alamat_err = $no_hp_err = $wali_murid_err = $no_wali_err = "";
			$nis = $first_name = $last_name = $kelas = $tgl_lahir = $no_hp = $wali_murid = $no_wali = "";
			$alamat = "Alamat";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$quser = mysqli_query($con, "SELECT user_name FROM users WHERE user_name = '$_POST[user_name]'");
				$cekuser = mysqli_num_rows($quser);
				if (empty($_POST['nis'])) {
					$nis_err = "* NIS harus diisi !";
				}
				elseif (!is_numeric($_POST['nohp'])) {
					$nohp_err = "* NIS harus berupa angka !";
				}
				elseif ($ceknis > 0) {
					$nis_err = "* NIS telah digunakan !";
				}
				else {
					$nis = trim($_POST['nis']);
				}

				if (empty($_POST['first_name'])) {
					$first_name_err = "* Nama Depan harus diisi !";
				}
				else if (!preg_match("/^[.a-zA-Z ]*$/", $_POST['first_name'])) {
					$first_name_err = "* Hanya dapat menginputkan huruf dan spasi !";
				}
				else {
					$first_name = trim($_POST['first_name']);
				}

				if (empty($_POST['last_name'])) {
					$last_name_err = "* Nama Belakang harus diisi !";
				}
				else if (!preg_match("/^[.a-zA-Z ]*$/", $_POST['last_name'])) {
					$last_name_err = "* Hanya dapat menginputkan huruf dan spasi !";
				}
				else {
					$last_name = trim($_POST['last_name']);
				}

				if (empty($_POST['kelas'])) {
					$kelas_err = "* Pilih kelas !";
				}
				else {
					$kelas = trim($_POST['kelas']);
				}

				if (empty($_POST['tgl_lahir'])) {
					$tgl_lahir_err = "* Tanggal Lahir harus diisi !";
				}
				else {
					$tgl_lahir = trim($_POST['tgl_lahir']);
				}

				if (empty($_POST['alamat']) || $_POST['alamat'] == "Alamat") {
					$alamat_err = "* Alamat harus diisi !";
				}
				else{
					$alamat = $_POST['alamat'];
				}

				if (empty($_POST['no_hp'])) {
					$no_hp_err = "* No Hp harus diisi !";
				}
				elseif (!is_numeric($_POST['no-hp'])) {
					$no_hp_err = "* No Hp harus berupa angka !";
				}
				else{
					$no_hp = $_POST['no_hp'];
				}

				if (empty($_POST['wali_murid'])) {
					$wali_murid_err = "* Nama Wali harus diisi !";
				}
				else if (!preg_match("/^[.a-zA-Z ]*$/", $_POST['wali_murid'])) {
					$wali_murid_err = "* Hanya dapat menginputkan huruf dan spasi !";
				}
				else {
					$wali_murid = trim($_POST['wali_murid']);
				}

				if (empty($_POST['no_wali'])) {
					$no_wali_err = "* No Hp Wali harus diisi !";
				}
				elseif (!is_numeric($_POST['no_wali'])) {
					$no_wali_err = "* No Hp Wali harus berupa angka !";
				}
				else{
					$no_wali = $_POST['no_wali'];
				}

				if ($nis_err == "" && $first_name_err == "" && $last_name_err == "" && $kelas_err == "" && $tgl_lahir_err == "" && $alamat_err == "" && $no_hp_err == "" && $wali_murid_err == "" && $no_wali == "") {
					mysqli_query($con, "INSERT INTO dokter (nm_dokter, gender, alamat, no_hp, no_ijin_praktek, id_poli) VALUE ('$nama', '$gender', '$alamat', '$nohp', '$nip', '$poli')");
					mysqli_query($con, "INSERT INTO login (id_user, username, password, level, status) VALUE ((SELECT id_dokter FROM dokter WHERE nm_dokter = '$nama'), '$username', '$password', 'Dokter', 'Aktif') ");
					echo "<script>
						alert('Data berhasil ditambah');
						window.location.href='data_dokter.php';
					  </script>";
				}
			}
		?>
		<div class="main">
 		 <div class="main-content">
 			 <div class="container-fluid">
 				 <div class="panel">
 					 <div class="panel-heading">
 						 <h1 class="panel-title"><i class="lnr lnr-user"></i>&ensp;Tambah Siswa</h1>
 					 </div>
 				 </div>
 				 <div class="row">
 					 <div class="col-md-12">
 						 <div class="panel">
 							 <div class="row">
 							<div class="panel-body">
									<form method="POST" action="">
										<div class="row">
											<div class="col-md-6">
												<label for="">NIS</label>
												<input type="text" name="nis" minlength="4" maxlength="6" class="form-control" placeholder="NIS" value="<?php echo(isset($_POST['nis']) ? $_POST['nis'] : $nis ) ?>">
		 										<span class="text-danger"> <?php echo($nis_err); ?></span>
											</div>
											<div class="col-md-6">
												<label for="">Nama Depan</label>
												<input type="text" name="first_name" minlength="1" maxlength="20" class="form-control" placeholder="Nama Depan" value="<?php echo(isset($_POST['first_name']) ? $_POST['first_name'] : $first_name ) ?>">
		 										<span class="text-danger"> <?php echo($first_name_err); ?></span>
											</div>
											<div class="col-md-6">
												<label for="">Nama Belakang</label>
												<input type="text" name="last_name" minlength="1" maxlength="20" class="form-control" placeholder="Nama Belakang" value="<?php echo(isset($_POST['last_name']) ? $_POST['last_name'] : $last_name ) ?>">
		 										<span class="text-danger"> <?php echo($last_name_err); ?></span>
											</div>
											<div class="col-md-6">
												<label for="">Kelas</label>
										   			<select class="form-control" name="poli">
														<option value="">-- Pilih Kelas --</option>
															<?php
																$qkelas = mysqli_query($con, "SELECT * FROM kelas");
																while ($val = mysqli_fetch_assoc($qkelas)) {
																	echo "<option value = '$val[id_kelas]' isset($_POST[kelas]) && $_POST[kelas] == $val[id_kelas] ? 'selected' : ''> $val[kelas] </option>";
																}
															 ?>
										    		</select>
												<span class="text-danger"><?php echo ($kelas_err) ?></span>
										  	</div>
										  	<div class="col-md-6">
												<label for=""></label>
												<input type="text" name="last_name" minlength="1" maxlength="20" class="form-control" placeholder="Nama Belakang" value="<?php echo(isset($_POST['last_name']) ? $_POST['last_name'] : $last_name ) ?>">
		 										<span class="text-danger"> <?php echo($last_name_err); ?></span>
											</div>







										<br>
										<div class="row">
		 									<div class="col-md-6">
		 										<button type="submit" class="btn btn-primary"><i class="fa fa-plus-square"></i>  Tambah</button> &nbsp; &nbsp;
		 										<button type="reset" name="reset" class="btn btn-danger" onclick="history.go(-1);"><i class="fa fa-times-circle"></i> &nbsp;  Batal</button>
		 									</div>
		 								</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<?php include '../dashboard/footer.php'; ?>
	</div>
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>
</body>
</html>
