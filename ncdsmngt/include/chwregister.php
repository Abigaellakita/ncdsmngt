<?php

include("connection.php");

if (isset($_POST['register'])) {
	$firstname = $_POST['fname'];
	$surname = $_POST['sname'];
	$username = $_POST['user'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$county = $_POST['county'];
     $subcounty = $_POST['subcounty'];
     $hospitals = $_POST['hospitals'];
	$password = $_POST['pass'];
	$confirm_password = $_POST['con_pass'];

	$error = array();

	if (empty($firstname)) {
		$error['register'] = "Enter Firstname";
	}else if (empty($surname)) {
		$error['register'] = "Enter Surname";
	}else if (empty($username)) {
		$error['register'] = "Enter Username";
	}else if (empty($email)) {
		$error['register'] = "Enter Email Address";
	}else if ($gender =="") {
		$error['register'] = "Select Your Gender";
	}else if (empty($phone)) {
		$error['register'] = "Enter Phone Number";
	}else if ($county =="") {
		$error['register'] = "Select County";
     }else if ($subcounty =="") {
          $error['register'] = "Select Subounty";
     }else if (empty($hospitals)) {
          $error['register'] = "Enter Hospitals";
	}else if (empty($password)) {
		$error['register'] = "Enter Password";
	}else if ($confirm_password != $password) {
		$error['register'] = "Passwords Do Not Match";
	}

     if (count($error) == 0) {
     	
     	$query = "INSERT INTO chws(firstname,surname,username,email,gender,phone,county,subcounty,hospitals,password,date_reg,status,profile) VALUES('$firstname','$surname','$username','$email','$gender','$phone','$county','$subcounty','$hospitals','$password',NOW(),'Pending','chws.jpg')";


     	$result = mysqli_query($connect,$query);

     	if ($result) {
     		echo "<script>alert('You have Successfully Registered')</script>";

     		header("Location: chwlogin.php");
     	}else{
            echo "<script>alert('Registration Failed')</script>";
     	}
     }

}

if (isset($error['register'])) {
	$s = $error['register'];

	$show = "<h5 class='text-center alert alert-danger'>$s</h5>";
}else{
	$show = "";
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Register Now!!!</title>
</head>
<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSltnRPuJUWNHXPsrRrTMgacdGhoi2i6yHK3w&usqp=CAU);background-size: cover;background-repeat: no-repeat;">
     <?php
      include("header.php");
     ?>

     <div class="container-fluid">
     	<div class="col-md-12">
     		<div class="row">
     			<div class="col-md-3">
     				
     			</div>
     			<div class="col-md-6 my-3 jumbotron">
     				<h5 class="text-center">Register Now!!!</h5>

                    <div>
                    	<?php echo $show;
                    	?>
                    </div> 
     				<form method="post">
     					<div class="form-group">
     						<label>Firstname</label>
     						<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname" value="<?php
                                   if(isset($_POST['fname'])) echo $_POST['fname'];
                                   ?>">
     					</div>
     					<div class="form-group">
     						<label>Surname</label>
     						<input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname" value="<?php
                                   if(isset($_POST['sname'])) echo $_POST['sname'];
                                   ?>">
     					</div>
     					<div class="form-group">
     						<label>Username</label>
     						<input type="text" name="user" class="form-control" autocomplete="off" placeholder="Enter Username" value="<?php
                                   if(isset($_POST['user'])) echo $_POST['user'];
                                   ?>">
     					</div>
     					<div class="form-group">
     						<label>Email</label>
     						<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address" value="<?php
                                   if(isset($_POST['email'])) echo $_POST['email'];
                                   ?>">
     					</div>
     					<div class="from-group">
     						<label>Select Gender</label>
     						<select name="gender" class="form-control">
     							<option value="">Select Gender</option>
     							<option value="Male">Male</option>
     							<option value="Female">Female</option>
     						</select>
     					</div>

     					<div class="form-group">
     						<label>Phone Number</label>
     						<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number" value="<?php
                                   if(isset($_POST['phone'])) echo $_POST['phone'];
                                   ?>">
     						
     					</div>
     					<div class="from-group">
                                   <label>Select County</label>
                                   <select name="county" class="form-control">
                                        <option value="">Select County</option>
                                        <option value="Mombasa">Mombasa</option>
                                        <option value="Kwale">Kwale</option>
                                        <option value="Kilifi">Kilifi</option>
                                        <option value="Lamu">Lamu</option>
                                        <option value="TanaRiver">TanaRiver</option>
                                   </select>
                              </div>
                              <div class="from-group">
                                   <label>Select Subcounty</label>
                                   <select name="subcounty" class="form-control">
                                        <option value="">Select Subcounty</option>
                                        <option value="Nyali">Nyali</option>
                                        <option value="Msambweni">Msambweni</option>
                                        <option value="Malindi">Malindi</option>
                                        <option value="Kinango">Kinango</option>
                                        <option value="Mvita">Mvita</option>
                                        <option value="Ganze">Ganze</option>
                                        <option value="Lamu East">Lamu East</option>
                                        <option value="Lamu West">Lamu West</option>
                                        <option value="Galole">Galole</option>
                                        <option value="Garsen">Garsen</option>
                                   </select>
                              </div>
     					<div class="form-group">
                                   <label>Hospitals</label>
                                   <input type="text" name="hospitals" class="form-control" autocomplete="off" placeholder="Enter Hospitals" value="<?php
                                   if(isset($_POST['hospitals'])) echo $_POST['hospitals'];
                                   ?>">
                              </div>

                         <div class="form-group">
                         	<label>Password</label>
                         	<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
                         </div>

                         <div class="form-group">
                         	<label>Confirm Password</label>
                         	<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
                         </div>

                         <input type="submit" name="register" value="Register Now!!!" class="btn btn-success">  
                         <p>I already have an account<a href="chwlogin.php">Click here</a> </p>
     				</form>
     			</div>
     			<div class="col-md-3">
     				
     			</div>
     		</div>
     	</div>
     	
     </div>
</body>
</html>