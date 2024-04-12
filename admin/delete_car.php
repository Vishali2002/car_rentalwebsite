<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM cars WHERE car_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					window.location = (\"add_vehicles.php\")
				</script>";
	}
?>
