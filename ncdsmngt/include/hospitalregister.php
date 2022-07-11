<?php

include("connection.php");

if (isset($_POST['register'])) {
	$hospitalname = $_POST['hname'];
	$username = $_POST['user'];
	$email = $_POST['email'];
	$level = $_POST['level'];
	$phone = $_POST['phone'];
     $county = $_POST['county'];
	$subcounty = $_POST['subcounty'];
     $diseases = $_POST['diseases'];
	$password = $_POST['pass'];
	$confirm_password = $_POST['con_pass'];

	$error = array();

	if (empty($hospitalname)) {
          $error['register'] = "Enter Hospital name";
     }else if (empty($username)) {
          $error['register'] = "Enter username";
     }else if (empty($email)) {
          $error['register'] = "Enter Email Address";
     }else if ($level =="") {
          $error['register'] = "Select Hospital Level";
     }else if (empty($phone)) {
          $error['register'] = "Enter Phone Number";
     }else if ($county =="") {
          $error['register'] = "Select County";
     }else if (empty($subcounty)) {
          $error['register'] = "Select Subcounty";
     }else if (empty($diseases)) {
          $error['register'] = "Select Diseases";
     }else if (empty($password)) {
          $error['register'] = "Enter Password";
     }else if ($confirm_password != $password) {
          $error['register'] = "Passwords Do Not Match";
     }

     if (count($error) == 0) {
     	
     	$query = "INSERT INTO hospitals(hospitalname,username,email,level,phone,county,subcounty,diseases,password,date_reg,status,profile) VALUES('$hospitalname','$username','$email','$level','$phone','$county','$subcounty','$diseases','$password',NOW(),'Pending','hospital.jpg')";


     	$result = mysqli_query($connect,$query);

     	if ($result) {
     		echo "<script>alert('You have Successfully Registered')</script>";

     		header("Location: hospital.php");
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
<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRurTlWHKHZ-ED1ChB_JldI4lehD8ppiH7nHQ&usqp=CAU);background-size: cover;background-repeat: no-repeat;">
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
     						<label>Hospital Name</label>
     						<input type="text" name="hname" class="form-control" autocomplete="off" placeholder="Enter Hospital Name" value="<?php
                                   if(isset($_POST['hname'])) echo $_POST['hname'];
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
     						<label>Select Level</label>
     						<select name="level" class="form-control">
     							<option value="">Select Level</option>
     							<option value="Level 1">Level 1</option>
     							<option value="Level 2">Level 2</option>
                                        <option value="Level 3">Level 3</option>
                                        <option value="Level 4">Level 4</option>
                                        <option value="Level 5">Level 5</option>
                                        <option value="Level 6">Level 6</option>
     						</select>
                                   

                              </div>

     					<div class="form-group">
     						<label>Phone Number</label>
     						<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number" value="<?php
                                   if(isset($_POST['phone'])) echo $_POST['phone'];
                                   ?>">
     						
     					</div>
                              <div class="form-group">
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
     					<div class="form-group">
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
                                   <label>Select Diseases</label>
                                   <select name="diseases" class="form-control">
                                        <option value="">Select Diseases</option>
                                        <option value="Diabetes">Diabetes</option>
                                        <option value="Asthma">Asthma</option>
                                        <option value="Breast Cancer">Breast Cancer</option>
                                        <option value="Hypertension">Hypertension</option>
                                        <option value="Diabetes,Asthma,Breast Cancer,Hypertension">Diabetes,Asthma,Breast Cancer, Hypertension</option>
                                        <option value="Diabetes,Asthma">Diabetes,Asthma</option>
                                        <option value="Breast Cancer,Hypertension">Breast Cancer,Hypertension</option>
                                        <option value="Diabetes,Hypertension">Diabetes,Hypertension</option>
                                        <option value="Diabetes,Breast Cancer">Diabetes,Breast Cancer</option>
                                        <option value="Hypertension,Asthma">Hypertension,Asthma</option>
                                   </select>
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
                         <p>I already have an account<a href="hospital.php">Click here</a> </p>
     				</form>
     			</div>
     			<div class="col-md-3">
     				
     			</div>
     		</div>
     	</div>
     	
     </div>
</body>
</html>