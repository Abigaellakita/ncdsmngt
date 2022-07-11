<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Dashboard</title>
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
    				<h5 class="my-3">Patient Dashboard</h5>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-5 bg-info mx-2" style="height: 150px;">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-4">My profile</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="profile.php">
                                                    <i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i>
                                                </a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="col-md-5 bg-warning mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-4">Appointment</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="#">
                                                    <i class="fa fa-calendar fa-3x my-4" style="color: white;"></i>
                                                </a>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-md-5 bg-success my-3 mx-2" style="height: 150px;">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-4">Report</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="#">
                                                    <i class="fa-solid fa-book-medical fa-3x my-4" style="color: white;"></i>
                                                </a>
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
    </div>
</body>
</html>