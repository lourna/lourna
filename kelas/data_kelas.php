<?php
session_start();
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
	<title>Data User | SIANI</title>
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
		 ?>
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="lnr lnr-user"></i>&ensp;Data Kelas</h3>
							<div class="col-md-2 col-md-offset-10">

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<div class="panel">
								<br>
								<div class="row">
									<div class="col-md-2">
										<a href="tambah_user.php"><button type="button" class="btn btn-primary btn-sm" style="margin-left: 25px; margin-bottom: 10px;">Tambah</button></a>
									</div>
									 <div class="col-md-6"></div>
									<div class="col-md-4">
										<form action="" method="POST">
											<div class="input-group" style="margin-right: 25px;">
												<input type="text" name="cari" class="form-control input-sm" placeholder="Cari berdasarkan nama ...">
												<span class="input-group-btn"><button type="submit" name="btn_cari" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button></span>
											</div>
										</form>
									</div>
								</div>

								<div class="panel-body">
									<table class="table table-striped table-hover table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>kode kelas</th>
												<th>kelas</th>
												<th>kode jurusan</th>
												<th>jurusan</th>
												<th>aksi</th>
											</tr>
										</thead>
										<tbody>
											<script type="text/javascript">
												function konfirm() {
													tanya = confirm("Anda yakin ?");
													if (tanya == true) return true;
													else return false;
												}
											</script>
											<?php

											
												$query = "SELECT kelas, kd_kelas ,jurusan, jurusan.id_jurusan FROM kelas INNER JOIN jurusan ON kelas.kd_kelas=kelas.kd_kelas";
												$result = mysqli_query($con, $query);
												$jml_user = mysqli_num_rows($result);
												$no = 1;
												// $edit = "<td><a href='edit_user.php?id_user=$val[id_user]' class='btn btn-primary btn-xs' title='Edit'></a></td>";

												foreach ($result as $val) {
													echo "<tr>
															<td>$no</td>
															<td>$val[kd_kelas]</td>
															<td>$val[kelas]</td> 
															<td>$val[id_jurusan]</td>
															<td>$val[jurusan]</td>
														
															<td>
																
															</td>

														  </tr>
													";
													$no++;
												}
													?>
										</tbody>
									</table>
									<span class="text-default">Jumlah data : <?php echo($jml_user) ?></span>
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
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/scripts/klorofil-common.js"></script>

</body>

</html>
