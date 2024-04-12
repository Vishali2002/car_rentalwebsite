<?php
session_start();
error_reporting(0);
?>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="logo"> <img src="/car-rental-tour/img/logo.png"></div>
			</div>
			<div class="col-sm-8">
			<nav class="navbar navbar-expand-sm">
					<?php
					
					if (!$_SESSION['email'] && (!$_SESSION['pass'])) {
					?>
						<ul class="navbar-nav">
							<li class="nav-item">
								 <a href="index.php" class="nav-link">Home</a>
							</li>
							<li class="nav-item"><a href="index.php" class="nav-link">Rent Cars</a></li>
							<li class="nav-item"><a href="#" class="nav-link">About</a></li>
							<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
							<li class="nav-item client_login"><a href="account.php" class="nav-link">Client Login</a></li>
							<li class="nav-item admin_login"><a href="login.php" class="nav-link">Admin Login</a></li>
						</ul>

					<?php
					} else {
					
					?>
						<ul class="navbar-nav">
							<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
							<li class="nav-item"><a href="status.php" class="nav-link">View Status</a></li>
							<li class="nav-item"><a href="message_admin.php" class="nav-link">Message Admin</a></li>
							<li class="nav-item logout_btn"><a href="admin/logout.php" class="nav-link">Logout</a></li>
						</ul>
						
					<?php
					}
					?>
				</nav>
			</div>

		</div>



	</div>
</header>