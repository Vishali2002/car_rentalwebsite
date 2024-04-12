<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'head.php';?>
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



	<div class="listings container">
		 <div class="text-center">
			  <h2>Book Your Car For Ride</h2>
		 </div>
		<div class="row">
			<?php
			include 'includes/config.php';
			$sel = "SELECT * FROM cars WHERE status = 'Available' ORDER BY  car_id DESC";
			$rs = $conn->query($sel);
			while ($rws = $rs->fetch_assoc()) {
			?>
				<div class="col-sm-4">
					<div class="single-lising">
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image']; ?>" width="300" height="200">
					
					
					<div class="property_details">
					<p class="price"> <strong>Fare/day</strong> <?php echo $rws['hire_cost']; ?></p>
					  <p><strong>Car brand:</strong> <?php echo  $rws['car_type']; ?></p>
					   <p><strong>Passenger capability: </strong><?php echo $rws['capacity']; ?> </p>
					    <p class="status"><strong><?php echo $rws['status']; ?></strong></p>
					</div>
				    </a>
					</div>
			</div>
			<?php
			}
			?>
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