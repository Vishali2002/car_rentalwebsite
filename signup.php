<!DOCTYPE html>
<html lang="en">
<head>
<?php include "head.php";?>
</head>
<body>

		<?php
			include 'header.php';
		?>



		<!-- <div class="conatiner">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div> -->

		<!-- <div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div>  -->
			

		<div class="sign_up">
		<div class="container">
			<div class="text-center">
			  <h1>Signup Here And book your favourite car</h1>
			</div>
				
				<form method="post">
				<div class="form-group">
					<label for="Full Name:">Full Name:</label>
					<input type="text" class="form-control" name="fname" required>
				</div>
				<div class="form-group">
					<label for="Phone Number:">Phone Number:</label>
					<input type="text" name="phone" class="form-control" required>
				</div>
				<div class="form-group">
				    <label for="email">Email Address:</label>
					<input type="email" name="email" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="ID Number:">Password:</label>
					<input type="text" name="id_no" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="Gender:">Gender:</label>
							<select name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
							</select>
				</div>
				<div class="form-group">
				 <label for="Location">Location:</label>
					<input type="text" name="location" class="form-control" required>
				</div>
				<button type="submit" name="save" class="btn btn-primary">Submit Details</button>		
				</form>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</div>	<!--  end listing section  -->

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