<!DOCTYPE html>
<html>
	<head>
		<title></title>
    
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">


	<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>

	
	<nav class="navbar navbar-expand-lg navbar-info bg-info">
		<h5 class="text-black">NCDs Management System</h5>

		<div class="mr-auto"></div>
		<ul class="navbar-nav">
			<?php
             if (isset($_SESSION['admin'])) {
             	
              $user = $_SESSION['admin'];
             	echo '
             
			<li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
             	';
            }else if (isset($_SESSION['healthcare worker'])) {
            	$user = $_SESSION['healthcare worker'];
            	echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>

            	';
            }else if (isset($_SESSION['hospital'])) {
            	$user = $_SESSION['hospital'];
            	echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>

            	';
            }else if (isset($_SESSION['community health worker'])) {
            	$user = $_SESSION['community health worker'];
            	echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>

            	';
            	

              }else if (isset($_SESSION['patient'])){
                $user = $_SESSION['patient'];
            	echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>

            	';
            	
              }else{
             	echo'



            <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>
            <li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>
			<li class="nav-item"><a href="healthcareworkerlogin.php" class="nav-link text-white">Healthcare Worker</a></li>
			<li class="nav-item"><a href="chwlogin.php" class="nav-link text-white">Community Health Worker</a></li>
			<li class="nav-item"><a href="patientlogin.php" class="nav-link text-white">NCDs Patient</a></li>
			<li class="nav-item"><a href="hospital.php" class="nav-link text-white">Hospital</a></li>



             	';
             }

			?>
		</ul>
		
	</nav>
</body>
</html>