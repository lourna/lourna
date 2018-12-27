<?php
	include '../koneksi.php';
	$nav = explode('/', $_SERVER['REQUEST_URI']);
	//$nav_dok = $nav[count($nav)]
	$nav = $nav[count($nav) - 2];
	echo $nav;
 ?>

 <!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<?php
				// session_start();
					if ($_SESSION['level'] == 'Admin') {?>

						<li><a href="../dashboard/dashboard.php" class="<?php echo ($nav == 'dashboard' ? 'active' : '') ?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="../users/data_user.php" class="<?php echo ($nav == "users" ? 'active' : '') ?>"><i class="lnr lnr-users"></i> <span>Data User</span></a></li>
						<li><a href="../siswa/data_siswa.php" class="<?php echo ($nav == "siswa" ? 'active' : '') ?>"><i class="lnr lnr-user"></i> <span>Data Siswa</span></a></li>
						<li><a href="../guru/data_guru.php" class="<?php echo ($nav == "guru" ? 'active' : '') ?>"><i class="lnr lnr-user"></i> <span>Data Guru</span></a></li>
						<li><a href="../mapel/data_mapel.php" class="<?php echo ($nav == "mapel" ? 'active' : '') ?>"><i class="fa fa-file-o"></i> <span>Mata Pelajaran</span></a></li>
						<li><a href="../kelas/data_kelas.php" class="<?php echo ($nav == "kelas" ? 'active' : '') ?>"><i class="fa fa-building-o"></i> <span>Kelas</span></a></li>
						<li><a href="../jurusan/data_jurusan.php" class="<?php echo ($nav == "jurusan" ? 'active' : '') ?>"><i class="fa fa-building-o"></i> <span>Jurusan</span></a></li>
							<li>
								<a href="#subPages1" data-toggle="collapse" class="<?php echo ($nav == "antrian" ? 'active' : '') ?>"><i class="lnr lnr-book"></i><span>Raport</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages1" class="collapse">
									<ul class="nav">
										<li><a href="../raport/nilai/data_nilai.php" class="">Nilai</a></li>
										<li><a href="../antrian/antrian_gigi.php" class="">Nilai Kompetensi</a></li>
										<li><a href="../antrian/antrian_kia.php" class="">Grafik</a></li>
									</ul>
								</div>
							</li>
						</li>
				<?php
					}
					elseif ($_SESSION['level'] == 'Siswa') {?>

						<li><a href="../dashboard/dashboard.php" class="<?php echo ($nav == 'dashboard' ? 'active' : '') ?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="../poli/data_poli.php" class="<?php echo ($nav == "poli" ? 'active' : '') ?>"><i class="fa fa-hospital-o"></i> <span>Data Poli</span></a></li>
						<li><a href="../pasien/data_pasien.php" class="<?php echo ($nav == "pasien" ? 'active' : '') ?>"><i class="lnr lnr-wheelchair"></i> <span>Pasien</span></a></li>
						<li><a href="../dokter/data_dokter.php" class="<?php echo ($nav == "dokter" ? 'active' : '') ?>"><i class="fa fa-user-md"></i> <span>Data Dokter</span></a></li>
						<li><a href="../pelayanan/data_pelayanan.php" class="<?php echo ($nav == "pelayanan" ? 'active' : '') ?>"><i class="fa fa-stethoscope"></i> <span>Pelayanan</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Info</span></a></li>
						<li><a href="../petugas/data_petugas.php" class="<?php echo ($nav == "petugas" ? 'active' : '') ?>"><i class="lnr lnr-user"></i> <span>Data Petugas</span></a></li>
						<li><a href="../kunjungan/data_kunjungan.php" class="<?php echo ($nav == "kunjungan" ? 'active' : '') ?>"><i class="glyphicon glyphicon-list-alt"></i> <span>Data Kunjungan</span></a></li>
				<?php
					}
					elseif ($_SESSION['level'] == 'Guru') {?>

						<li><a href="../dashboard/dashboard.php" class="<?php echo ($nav == 'dashboard' ? 'active' : '') ?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="../siswa/data_siswa.php" class="<?php echo ($nav == "siswa" ? 'active' : '') ?>"><i class="lnr lnr-user"></i> <span>Data Siswa</span></a></li>
						<li><a href="../guru/data_guru.php" class="<?php echo ($nav == "guru" ? 'active' : '') ?>"><i class="lnr lnr-user"></i> <span>Data Guru</span></a></li>
						<li><a href="../raport/data_raport.php" class="<?php echo ($nav == "raport" ? 'active' : '') ?>"><i class="lnr lnr-book"></i> <span>Raport</span></a>
							<li>
								<a href="#subPages1" data-toggle="collapse" class="<?php echo ($nav == "antrian" ? 'active' : '') ?>"><i class="lnr lnr-list"></i><span>Raport</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages1" class="collapse">
									<ul class="nav">
										<li><a href="../raport/nilai/data_nilai.php" class="">Nilai</a></li>
										<li><a href="../antrian/antrian_gigi.php" class="">Nilai Kompetensi</a></li>
										<li><a href="../antrian/antrian_kia.php" class="">Grafik</a></li>
									</ul>
								</div>
							</li>
					<?php
					}
				 	?>

					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
