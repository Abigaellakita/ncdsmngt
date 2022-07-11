<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Check Patient Appointment</title>
</head>
<body>
<?php

     include("../header.php");

     include("../connection.php");

?>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -30px;">
				<?php
                  include("sidenav.php");

				?>
			</div>
			<div class="col-md-10">
				<h5 class="text-center my-2">Check Appointment</h5>

				<?php
                 if (isset($_GET['id'])) {
                 	
                 	$id = $_GET['id'];

                 	$query = "SELECT * FROM appointment WHERE id='$id'";

                 	$res = mysqli_query($connect,$query);

                 	$row = mysqli_fetch_array($res);
                 }

				?>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<table class="table table-bordered">
								<tr>
									<th class="text-center" colspan="2">Appointment Details</th>
								</tr>

								<tr>
									<td>Firstname</td>
									<td><?php echo $row['firstname']; ?></td>
								</tr>


								<tr>
									<td>Surname</td>
									<td><?php echo $row['surname']; ?></td>
								</tr>

								<tr>
									<td>Disease</td>
									<td><?php echo $row['disease']; ?></td>
								</tr>

								<tr>
									<td>Phone Number</td>
									<td><?php echo $row['phone']; ?></td>
								</tr>

								<tr>
									<td>Appointment Date</td>
									<td><?php echo $row['appointment_date']; ?></td>
								</tr>

								<tr>
									<td>Patient's Symptoms</td>
									<td><?php echo $row['symptoms']; ?></td>
								</tr>
								 
							</table>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>