<?php
$query = "SELECT siswa.nis, first_name, last_name, kelas, tgl_lahir, alamat, no_hp, wali_murid, hp_wali FROM siswa LEFT JOIN kelas ON siswa.kd_kelas=kelas.kd_kelas WHERE nis = '$GET[user_name]'";
$result = mysqli_query($con, $query);

?>
<!-- MAIN -->
			<!-- MAIN CONTENT -->
			<div class="main">
	 		 <div class="main-content">
	 			 <div class="container-fluid">
	 				 <div class="panel">
	 					 <div class="panel-heading">
	 						 <h1 class="panel-title"></i>&ensp;Selamat Datang

								 <?php foreach ($result as $val) {
									  echo "$val[first_name]";
									}?></h1>
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
													<label for="">ID</label>
													<input type="text" name="id_guru" minlength="4" maxlength="6" class="form-control" placeholder="ID" value="<?php echo(isset($_POST['id_guru']) ? $_POST['id_guru'] : $id_guru ) ?>">
			 										<span class="text-danger"> <?php echo($id_guru_err); ?></span>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-md-6">
													<label for="">Nama Guru</label>
													<input type="text" name="nama_guru" minlength="1" maxlength="20" class="form-control" placeholder="Nama Guru" value="<?php echo(isset($_POST['nama_guru']) ? $_POST['nama_guru'] : $nama_guru ) ?>">
													<span class="text-danger"> <?php echo($nama_guru_err); ?></span>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-md-6">
													<label for="">No. Hp</label>
													<input type="text" name="no_hp" minlength="11" maxlength="13" class="form-control" placeholder="No. Hp" value="<?php echo(isset($_POST['no_hp']) ? $_POST['no_hp'] : $no_hp ) ?>">
			 										<span class="text-danger"> <?php echo($no_hp_err); ?></span>
												</div>
											</div>
											<br>
											<div class="row">
											  	<div class="col-md-6">
													<label for="">Email</label>
														<input type="text" name="email" minlength="2" maxlength="30" class="form-control" placeholder="Email" value="<?php echo(isset($_POST['email']) ? $_POST['email'] : $email ) ?>">
			 												<span class="text-danger"> <?php echo($email_err); ?></span>
													</div>
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
			<!-- END MAIN CONTENT -->

		<!-- END MAIN -->
