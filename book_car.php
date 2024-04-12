<!DOCTYPE html>
<html lang="en">

<head>
	<?php	 include 'head.php'; ?>
</head>

<body>

	<?php
	include 'header.php';
	?>

	<div class="mainbg">
		<div class="text-center">
			<h1>Find And Book Yor Cars For Happy Ride</h1>
			<p>Range Rovers - Mercedes Benz - Landcruisers</p>
		</div>
	</div>
	<?php
					include 'includes/config.php';
					$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
					$rs = $conn->query($sel);
					$rws = $rs->fetch_assoc();
					?>
<div class="bg_img">
	<div class="container listings">
		<div class="text-center">
			<h1>Proceed to Hire <?php echo $rws['car_name']; ?>. </h1>
		</div>
	
		<div class="row properties_list">
		<?php if ((!$_SESSION['email']) && (!$_SESSION['pass'])) {
			?>
			<div class="col-sm-6">
			<?php }else{ ?>
				<div class="col-sm-12 text-center">
			<?php }  ?>
				<div class="prod_img">


					<img class="full_img" src="cars/<?php echo $rws['image']; ?>" width="300" height="200">


					<div class="property_details">
						<p class="price"> <strong>Fare/day</strong> <?php echo $rws['hire_cost']; ?></p>
						<p><strong>Car brand:</strong> <?php echo  $rws['car_type']; ?></p>
						<p><strong>Passenger capability: </strong><?php echo $rws['capacity']; ?> </p>
						<p class="status"><strong><?php echo $rws['status']; ?></strong></p>
					</div>
				</div>

				
				<?php
				if ((!$_SESSION['email']) && (!$_SESSION['pass'])) {
				?>
			</div>
		
		<div class="col-sm-6">
			<form method="post">
				<div class="form-group">
					<label for="Full Name:">Full Name</label>
					<input type="text" name="fname" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="Full Name:">Phone Number</label>
					<input type="text" name="phone" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="Full Name:">Email Address:</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="Full Name:">ID Number:</label>
					<input type="text" name="id_no" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="Full Name:">Gender:</label>
					<select name="gender" class="form-control">
						<option> Select Gender </option>
						<option> Male </option>
						<option> Female </option>
					</select>
				</div>
				<div class="form-group">
					<label for="Full Name:">Location:</label>
					<input type="text" name="location" class="form-control" required>
				</div>

				<button type="submit" name="save" class="btn btn-primary" value="Submit Details">submit</button>

			</form>
		<?php
				} else {
		?>
			<a href="pay.php"><button class="btn btn-primary" type="button">Click to Book</button></a>
		<?php
				}
		?>
		<?php
		if (isset($_POST['save'])) {
			include 'includes/config.php';
			$fname = $_POST['fname'];
			$id_no = $_POST['id_no'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			 $_SESSION['email'] = $email;
			$phone = $_POST['phone'];
			$location = $_POST['location'];

			$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
			$result = $conn->query($qry);
			if ($result == TRUE) {
				echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
			} else {
				echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
			}
		}

		?>
		</div>
	</div>
	</div>
</div>
	<!--  end listing section  -->

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

				<?php include_once "includes/footer.php" ?>