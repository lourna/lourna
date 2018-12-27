<?php session_start();
if (empty($_SESSION['user_name']) && empty($_SESSION['level'])) {
	echo "<script>
		alert('Anda harus login dahulu !');
		window.location.href='../login.php';
	</script>";
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<title>Data Kelas | SIANI</title>
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
			$query = "SELECT * FROM kelas WHERE kelas = '$_GET[kelas]'";
			$result = mysqli_query($con, $query);
			$val = mysqli_fetch_assoc($result);
			$nis_err = $first_name_err = $last_name_err = $kelas_err = $tgl_lahir_err = $alamat_err = $no_hp_err = $wali_murid_err = $hp_wali_err = "";
			$nis = $first_name = $last_name = $kelas = $tgl_lahir = $no_hp = $wali_murid = $hp_wali = "";
			$alamat = "Alamat";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$quser = mysqli_query($con, "SELECT user_name FROM users WHERE user_name = '$_POST[user_name]'");
				$cekuser = mysqli_num_rows($quser);
				if (empty($_POST['nis'])) {
					$nis_err = "* NIS harus diisi !";
				}
				elseif (!is_numeric($_POST['nis'])) {
					$nis_err = "* NIS harus berupa angka !";
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
				elseif (!is_numeric($_POST['no_hp'])) {
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

				if (empty($_POST['hp_wali'])) {
					$hp_wali_err = "* No Hp Wali harus diisi !";
				}
				elseif (!is_numeric($_POST['hp_wali'])) {
					$hp_wali_err = "* No Hp Wali harus berupa angka !";
				}
				else{
					$hp_wali = $_POST['hp_wali'];
				}
				
				if ($nis_err == "" && $first_name_err == "" && $last_name_err == "" && $kelas_err == "" && $tgl_lahir_err == "" && $alamat_err == "" && $no_hp_err == "" && $wali_murid_err == "" && $hp_wali == "") {
					mysqli_query($con, "UPDATE dokter SET nm_dokter = '$nama', gender = '$gender', alamat = '$alamat', no_hp = '$nohp', no_ijin_praktek = '$nip', id_poli = '$poli' WHERE id_dokter = '$_POST[id_dokter]' ");
					echo "<script>
						alert('Data berhasil diperbarui');
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
 						 <h1 class="panel-title"><i class="fa fa-user-md"></i>&ensp;Edit Dokter</h1>
 					 </div>
 				 </div>
 				 <div class="row">
 					 <div class="col-md-12">
 						 <div class="panel">
 							 <div class="row">
 							<div class="panel-body">
									<form method="POST" action="">
										<input type="hidden" name="id_dokter" value="<?php echo $val['id_dokter']?>">
										<div class="row">
											<div class="col-md-6">
												<label for="">Nama Dokter</label>
												<input type="text" name="nama" class="form-control" placeholder="Nama Dokter" value="<?php echo($val['nm_dokter']) ?>">
		 										<span class="text-danger"> <?php echo($nama_err); ?></span>
											</div>
											<div class="col-md-6">
												<label for="">No Handphone</label>
												<input type="text" name="nohp" minlength="11" maxlength="13" class="form-control" placeholder="No Handphone" value="<?php echo($val['no_hp']) ?>">
		 										<span class="text-danger"> <?php echo($nohp_err); ?></span>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<label for="">Gender</label>
												<br>
												<div class="col-md-3">
		 											<label class="fancy-radio">
		 											<input type="radio" name="gender" class="form-control" value="Laki-laki" <?php echo($val['gender'] == "Laki-laki" ? 'checked' : '') ?> ><span><i></i>Laki-Laki</span>
		 											</label>
		 										</div>
		 										<div class="col-md-3">
		 											<label class="fancy-radio">
		 											<input type="radio" name="gender" class="form-control" value="Perempuan" <?php echo($val['gender'] == "Perempuan" ? 'checked' : '') ?> ><span><i></i>Perempuan</span>
		 											</label>
		 										</div>
		 										<span class="text-danger"> <?php echo($gender_err); ?></span>
											</div>
											<div class="col-md-6">
												<label for="">No Izin Praktek</label>
												<input type="text" name="nip" class="form-control" placeholder="Nomor Izin Praktek" value="<?php echo($val['no_ijin_praktek']) ?>">
		 										<span class="text-danger"> <?php echo($nip_err); ?></span>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<label for="">Alamat</label>
												<textarea name="alamat" class="form-control" rows="2"><?php echo $val['alamat'] ?></textarea>
		 										<span class="text-danger"> <?php echo($alamat_err); ?></span>
											</div>
											<div class="col-md-6">
												<label for="">Poli</label>
										    <select class="form-control" name="poli">
													<option value="">-- Pilih Poli --</option>
													<?php
														$qpoli = mysqli_query($con, "SELECT * FROM poli");
														while ($valpoli = mysqli_fetch_assoc($qpoli)) {
															echo "<option value = '$valpoli[id_poli]' $val[id_poli] == $valpoli[id_poli] ? 'selected' : ''> $valpoli[id_poli] </option>";
														}
													 ?>
										    </select>
												<span class="text-danger"><?php echo ($val['id_poli']) ?></span>
										  </div>
										</div>
										<br>
										<div class="row">
		 									<div class="col-md-6">
		 										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>  Simpan</button> &nbsp; &nbsp;
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
		<script src="../assets/vendor/jquery/jquery.min.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../assets/scripts/klorofil-common.js"></script>
</body>
	</div>
</body>
</html>
