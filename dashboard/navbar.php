<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar_color navbar-fixed-top">
			<div class="logo">
				<span><img src="../assets/img/logo2.png" alt="logo siani" height="50px">
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-chevron-left-circle" ></i></button>
				</div>

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> <span> Options </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<?php
								// session_start();
									if ($_SESSION['level'] == 'Admin') {?>
										<li><a href="#"><i class="lnr lnr-user"></i> <span>Edit Profil</span></a></li>
										<li><a href="#"><i class="lnr lnr-lock"></i> <span>Ganti Password</span></a></li>
										<li><a href="../backup.php"><i class="lnr lnr-backup"></i> <span>Backup</span></a></li>
										<li><a href="../restore.php"><i class="lnr lnr-restore"></i> <span>Restore</span></a></li>
										<li><a href="../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								<?php
									}
									else  {?>
										<li><a href="#"><i class="lnr lnr-user"></i> <span>Edit Profil</span></a></li>
										<li><a href="#"><i class="lnr lnr-lock"></i> <span>Ganti Password</span></a></li>
										<li><a href="../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
									<?php
									}
									?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
