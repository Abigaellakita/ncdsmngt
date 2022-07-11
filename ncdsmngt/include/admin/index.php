<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
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
				<h4 class="my-2">Admin Dashboard</h4>

				<div class="col-md-12 my-1">
					<div class="row">
					<div class="col-md-3 bg-success mx-2" style="height: 90px;">
                       <div class="col-md-12">
                       	<div class="row">
                       		<div class="col-md-8">
                                 <?php
                                 $ad = mysqli_query($connect,"SELECT * FROM admin");

                                 $num = mysqli_num_rows($ad);
                                 ?>

                       			<h5 class="my-0 text-white" style="font-size: 30px;"><?php echo $num;

                       				?></h5>
                       			<h5 class="text-white">Total</h5>
                       			<h5 class="text-white">Admin</h5>
                       		</div>
                       		<div class="col-md-4">
                       			<a href="admin.php"><i class="fa-solid fa-user-gear fa-3x my-4" style="color: black;"></i></a>
                       				
                       			</i>
                       			
                       		</div>
                       	</div>
                       	
                       </div>
							
					</div>
						<div class="col-md-3 bg-info mx-2" style="height: 90px;">
							<div class="col-md-12">
                       	<div class="row">
                       		<div class="col-md-8">
                            <?php
                              $healthcareworker = mysqli_query($connect,"SELECT * FROM healthcareworkers WHERE status='Approved'");

                              $num3 = mysqli_num_rows($healthcareworker);

                            ?>
                       			<h5 class="my-0 text-white" style="font-size: 30px;"><?php 
                               echo $num3;
                            ?></h5>
                       			<h5 class="text-white">Total</h5>
                       			<h5 class="text-white">HealthcareWorkers</h5>
                       		</div>
                       		<div class="col-md-4">
                       			<a href="healthcareworker.php"><i class="fa-solid fa-user-doctor fa-3x my-4" style="color: black;"></i></a>

                       			
                       		</div>
                       	</div>
                       	
                       </div>
							
							
						</div>
						<div class="col-md-3 bg-success mx-2" style="height: 90px;">
							<div class="col-md-12">
                       	<div class="row">
                       		<div class="col-md-8">
                              <?php
                              $communityhealthworker = mysqli_query($connect,"SELECT * FROM chws WHERE status='Approved'");

                              $num4 = mysqli_num_rows($communityhealthworker);

                            ?>
                            <h5 class="my-0 text-white" style="font-size: 30px;"><?php 
                               echo $num4;
                            ?></h5>

                       			
                       			<h5 class="text-white">Total</h5>
                       			<h5 class="text-white">CHWs</h5>
                       		</div>
                       		<div class="col-md-4">
                       			<a href="chw.php"><i class="fa-solid fa-users fa-3x my-4" style="color: black;"></i></a>

                       			
                       		</div>
                       	</div>
                       	
                       </div>
							
							
						</div>

						<div class="col-md-3 bg-warning mx-2 my-2" style="height: 90px;">
							
							<div class="col-md-12">
                       	<div class="row">
                       		<div class="col-md-8">

                            <?php

                              $p = mysqli_query($connect,"SELECT * FROM patient");

                              $pp = mysqli_num_rows($p);


                            ?>
                       			<h5 class="my-0 text-white" style="font-size: 30px;"><?php echo $pp; ?></h5>
                       			<h5 class="text-white">Total</h5>
                       			<h5 class="text-white">Patients</h5>
                       		</div>
                       		<div class="col-md-4">
                       			<a href="patient.php"><i class="fa-solid fa-bed-pulse fa-3x my-4" style="color: black;"></i></a>

                       			
                       		</div>
                       	</div>
                       	
                       </div>
							
							
						</div>
						

                          
                          

                          

						<div class="col-md-3 bg-success mx-2 my-2" style="height: 90px;">
						<div class="col-md-12">
                       	<div class="row">
                       		<div class="col-md-8">
                            <?php

                               $job = mysqli_query($connect,"SELECT * FROM healthcareworkers WHERE status='Pending'");
                               $num1 = mysqli_num_rows($job);
                            ?>
                       			<h5 class="my-0 text-white" style="font-size: 30px;"><?php
                              echo $num1;
                            ?></h5>
                       			<h5 class="text-white">Total</h5>
                       			<h5 class="text-white">Job Request</h5>
                       		</div>
                       		<div class="col-md-4">
                       			<a href="jobrequest.php"><i class="fa-solid fa-file-pen fa-3x my-4" style="color: black;"></i></a>

                       			
                       		</div>
                       	</div>
                       	
                       </div>
							
						</div>

                        
            <div class="col-md-3 bg-warning mx-2 my-2" style="height: 90px;">
            <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-8">
                            <?php

                               $hospital = mysqli_query($connect,"SELECT * FROM hospitals WHERE status='Pending'");
                               $num2 = mysqli_num_rows($hospital);
                            ?>
                            <h5 class="my-0 text-white" style="font-size: 30px;"><?php
                              echo $num2;
                            ?></h5>
                            <h5 class="text-white">Hospital</h5>
                            <h5 class="text-white">Request</h5>
                          </div>
                          <div class="col-md-4">
                            <a href="hospitalrequest.php"><i class="fa-solid fa-hospital-user fa-3x my-4" style="color: black;"></i></a>



                            <h5 class="my-0 text-white" style="font-size: 30px;">0</h5>
                            <h5 class="text-white">Hospital</h5>
                            <h5 class="text-white">Request</h5>
                          </div>

                            
                          </div>
                        </div>
                        
                       </div>
                      <div class="col-md-3 bg-success mx-2 my-2" style="height: 90px;">
            <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-8">
                            <?php

                               $volunteer = mysqli_query($connect,"SELECT * FROM chws WHERE status='Pending'");
                               $num5 = mysqli_num_rows($volunteer);
                            ?>
                            <h5 class="my-0 text-white" style="font-size: 30px;"><?php
                              echo $num5;
                            ?></h5>
                            <h5 class="text-white">Total</h5>
                            <h5 class="text-white">Volunteer Request</h5>
                          </div>
                          <div class="col-md-4">
                            <a href="volunteerrequest.php"><i class="fa-solid fa-file-pen fa-3x my-4" style="color: black;"></i></a>

                            
                          </div>
                        </div>
                        
                       </div>
              
            </div>
<div class="col-md-3 bg-info mx-2" style="height: 90px;">
              <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-8">
                            <?php
                              $hospital = mysqli_query($connect,"SELECT * FROM hospitals WHERE status='Approved'");

                              $num4 = mysqli_num_rows($hospital);

                            ?>
                            <h5 class="my-0 text-white" style="font-size: 30px;"><?php 
                               echo $num3;
                            ?></h5>
                            <h5 class="text-white">Total</h5>
                            <h5 class="text-white">Hospitals</h5>
                          </div>
                          <div class="col-md-4">
                            <a href="hospitals.php"><i class= "fa-solid fa-house-medical fa-3x my-4" style="color: black;"></i></a>

                            
                          </div>
                        </div>
                        
                       </div>
              
            </div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
</div>

</body>
</html>