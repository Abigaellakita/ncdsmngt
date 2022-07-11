<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Healthcare Worker's Dashboard</title>
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
                    <div class="container-fluid">
                        <h5>Healthcare Worker's Dashboard</h5>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 my-2 bg-info mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-4">My Profile</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="profile.php"><i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i></a>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="col-md-3 my-2 bg-success mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <?php

                                                  $p = mysqli_query($connect,"SELECT * FROM asthmareport");

                                                  $pp = mysqli_num_rows($p);


                                                 ?>
                                               
                                                <h5 class="text-white my-2" style="font-size: 30px;"><?php echo $pp;?></h5>
                                                <h5 class="text-white my-4">Asthma Patients</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="asthmapatient.php"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="col-md-3 my-2 bg-warning mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <?php

                                                  $di = mysqli_query($connect,"SELECT * FROM diabetesreport");

                                                  $dia = mysqli_num_rows($di);


                                                 ?>

                                                <h5 class="text-white my-2" style="font-size: 30px;"><?php echo $dia; ?></h5>
                                                <h5 class="text-white my-4">Diabetes Patients</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="diabetespatient.php"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="col-md-3 my-2 bg-success mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <?php

                                                  $br = mysqli_query($connect,"SELECT * FROM breastcancerreport");

                                                  $bre = mysqli_num_rows($br);


                                                 ?>

                                                <h5 class="text-white my-2" style="font-size: 30px;"><?php echo $bre; ?></h5>
                                                <h5 class="text-white my-4">Breast Cancer Patients</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="breastcancerpatient.php"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="col-md-3 my-2 bg-warning mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <?php

                                                  $hy = mysqli_query($connect,"SELECT * FROM hypertensionreport");

                                                  $hyp = mysqli_num_rows($hy);


                                                 ?>
                                                
                                                <h5 class="text-white my-2" style="font-size: 30px;"><?php echo $hyp; ?></h5>
                                                <h5 class="text-white my-4">Hypertension Patients</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="hypertensionpatient.php"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-md-3 my-2 bg-info mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <?php
                                                  $ap = mysqli_query($connect,"SELECT * FROM appointment");

                                                  $app = mysqli_num_rows($ap);


                                                ?>
                                                <h5 class="text-white my-2" style="font-size: 30px;"><?php echo $app; ?></h5>
                                                <h5 class="text-white my-4">Appointments</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="appointment.php"><i class="fa fa-calendar fa-3x my-4" style="color: white;"></i></a>
                                                
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