<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>
	</section><!--  end hero section  -->

<div class="forms_bg">
	 <div class="text-center">
	 <h1>Log in here and book yours favourite cars for a ride</h1>
	 </div>
		<div class="container">
		<div id="fom" >
		   <form method="post">
			    <div class="form-group">
					 <label for="Email address">Email Address:</label>
					 <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
				</div> 
				<div class="form-group">
					 <label for="Password">Password:</label>
					 <input type="password" name="pass" class="form-control" placeholder="Enter your's username" required>
				</div> 
				<button class="btn btn-primary" name="log" type="submit">Log in</button>
				<a href="signup.php">Sigup Here</a>				
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>
</div>
	

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

			<?php include_once "includes/footer.php"; ?>