<?php

session_start();
include("connection.php");

if (isset($_POST['login'])) {
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $error = array();


  $q = "SELECT * FROM hospitals WHERE username='$username' AND password='$password'";
  $qq = mysqli_query ($connect,$q);

  $row = mysqli_fetch_array($qq);
  if (empty($username)) {
    $error['login'] = "Enter Username";
  }else if (empty($password)) {
    $error['login'] = "Enter Password";
  }else if ($row['status'] == "Pending") {
    $error['login'] = "Kindly Wait For the Admin to Confirm";
  }else if ($row['status'] == "Rejected") {
    $error['login'] = "Try Again Later";
  }


  if (count($error)==0) {
    $query = "SELECT * FROM hospitals WHERE username='$username' AND password='$password'";

    $res = mysqli_query($connect,$query);

    if (mysqli_num_rows($res)) {
      echo "<script>alert('done')</script>";
        $_SESSION['hospital'] = $username;
      header("Location:hospital/index.php");
    }else{
      echo "<script>alert('Account Does Not Exist')</script>";
    } 
  }
}

if (isset($error['login'])) {
  
  $l = $error['login'];

  $show = "<h5 class='text-center alert alert-danger'>$l</h5>";
}else{
  $show ="";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital Login Page</title>
</head>
<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRurTlWHKHZ-ED1ChB_JldI4lehD8ppiH7nHQ&usqp=CAU);background-size: cover;background-repeat: no-repeat;">
  <?php
  include("header.php");
  ?>

  <div class="container-fluid">
  	<div class="col-md-12">
  		<div class="row">
  			<div class="col-md-3">
  				
  			</div>
  			<div class="col-md-6 jumbotron my-3">
  				<h5 class="text-center my-2 ">Hospital Login</h5>

          <div>
            <?php echo $show;
            ?>
          </div>

  				<form method="post">
  					<div class="form-group">
  						
  						<label>Username</label>
  						<input type="text" name="user" class="form-control" autocomplete="off" placeholder="Enter Username">
  					</div>
  					<div class="form-group">
  						<label>Password</label>
  						<input type="password" name="pass" class="form-control" autocomplete="off">
  						
  					</div>
  					<input type="submit" name="login" class="btn btn-success" value="Login">
  					<p>Don't have an account<a href="hospitalregister.php">Register Now!!!</a></p>
  				</form>
  			</div>
  			<div class="col-md-3">
  				
  			</div>
  		</div>
  		
  	</div>
  </div>
</body>
</html>