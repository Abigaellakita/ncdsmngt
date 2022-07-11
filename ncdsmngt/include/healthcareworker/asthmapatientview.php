<?php
session_start();

?><!DOCTYPE html>
<html>
<head>
	<title>View Patient Details</title>
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
    				<h5 class="text-center my-3">View Patient Details</h5>

    				<?php

    				if (isset($_GET['id'])) {
    					
    					$id = $_GET['id'];

    					$query = "SELECT * FROM asthmareport WHERE id='$id'";

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
    									<th class="text-center" colspan="2">Details</th>
    								</tr>

    								<tr>
    									<td>Patientname</td>
    									<td><?php echo $row['patientname']; ?></td>
    								</tr>

    								<tr>
    									<td>Temperature</td>
    									<td><?php echo $row['temperature']; ?></td>
    								</tr>

    								<tr>
    									<td>Pulse Rate</td>
    									<td><?php echo $row['pulserate']; ?></td>
    								</tr>

    								<tr>
    									<td>Respiration Rate</td>
    									<td><?php echo $row['respirationrate']; ?></td>
    								</tr>

    								<tr>
    									<td>Blood Pressure</td>
    									<td><?php echo $row['bloodpressure']; ?></td>
    								</tr>

    								<tr>
    									<td>Appearance</td>
    									<td><?php echo $row['appearance']; ?></td>
    								</tr>

    								<tr>
    									<td>Concerns</td>
    									<td><?php echo $row['concerns']; ?></td>
    								</tr>

    								<tr>
    									<td>Medication</td>
    									<td><?php echo $row['medication']; ?></td>
    								</tr>

    								<tr>
    									<td>Conclusion</td>
    									<td><?php echo $row['conclusion']; ?></td>
    								</tr>

    								<tr>
    									<td>Date Report Was Sent</td>
    									<td><?php echo $row['date_send']; ?></td>
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