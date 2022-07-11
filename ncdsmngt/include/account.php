<?php
   include("connection.php");

 if (isset($_POST['create'])) {
 	$fname = $_POST['fname'];
 	$sname = $_POST['sname'];
 	$user = $_POST['user'];
 	$email = $_POST['email'];
 	$phone = $_POST['phone'];
 	$gender = $_POST['gender'];
 	$county = $_POST['county'];
 	$subcounty = $_POST['subcounty'];
 	$diseases = $_POST['diseases'];
 	$kin = $_POST['kin'];
 	$kin_phone = $_POST['kin_phone'];
 	$password = $_POST['pass'];
 	$con_pass = $_POST['con_pass'];


 	$error = array();


 	if (empty($fname)) {
 		$error['ac'] = "Enter Firstname";
 	}else if (empty($sname)) {
 		$error['ac'] = "Enter Surname";
 	}else if (empty($user)) {
 		$error['ac'] = "Enter Username";
 	}else if (empty($email)) {
 		$error['ac'] = "Enter Email Address";
 	}else if (empty($phone)) {
 		$error['ac'] = "Enter Phone Number";
 	}else if ($gender == "") {
 		$error['ac'] = "Select Gender";
 	}else if ($county == "") {
 		$error['ac'] = "Select County";
 	}else if ($subcounty == "") {
 		$error['ac'] = "Select Subcounty";
 	}else if ($diseases == "") {
 		$error['ac'] = "Select Diseases";
 	}else if (empty($kin)) {
 		$error['ac'] = "Enter Kin Name";
 	}else if (empty($kin_phone)) {
 		$error['ac'] ="Enter Kin Phone Number";
 	}else if (empty($password)) {
 		$error['ac'] = "Enter Password";
 	}else if ($con_pass != $password) {
 		$error['ac'] = "Password Do Not Match";
 	}

 	if (count($error)==0) {
 		
 		$query = "INSERT INTO patient(firstname,surname,username,email,phone,gender,county,subcounty,diseases,kin,kin_phone,password,date_reg,profile) VALUES('$fname','$sname','$user','$email','$phone','$gender','$county','$subcounty','$diseases','$kin','$kin_phone','$password',NOW(),'patient.jpg')";

 		$res = mysqli_query($connect,$query);

 		if ($res) {
 			header("Location:patientlogin.php");
 		}else{
 			echo "<script>alert('failed')</script>";
 		}
 	}
 }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
</head>
<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPgnGW5KaRq1Wdb4A1iw9qJn55n98cOzznLw&usqp=CAU); background-repeat: no-repeat; background-size: cover;">
    <?php
      include("header.php");
    ?>
    <div class="container-fluid">
    	<div class="col-md-12">
    		<div class="row">
    			<div class="col-md-3"></div>
    			<div class="col-md-6 my-2 jumbotron">
    			<h5 class="text-center text-info my-2">Create Account</h5>
    			<form method="post">
    				<div class="form-group">
    					<label>Firstname</label>
    					<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
    				</div>

    				<div class="form-group">
    					<label>Surname</label>
    					<input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname">
    				</div>

    				<div class="form-group">
    					<label>Username</label>
    					<input type="text" name="user" class="form-control" autocomplete="off" placeholder="Enter Username">
    				</div>

    				<div class="form-group">
    					<label>Email</label>
    					<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address">
    				</div>
    				<div class="form-group">
    					<label>Phone Number</label>
    					<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
    				</div>
    				<div class="form-group">
    					<label>Gender</label>
    					<select name="gender" class="form-control">
    						<option value="">Select Your Gender</option>
    						<option value="Male">Male</option>
    						<option value="Female">Female</option>
    					</select>
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
    					           <label>Kin</label>
    					             <input type="text" name="kin" class="form-control" autocomplete="off" placeholder="Enter Kin Name">
    				    </div>
    				    <div class="form-group">
    					           <label>Kin Phone Number</label>
    					             <input type="number" name="kin_phone" class="form-control" autocomplete="off" placeholder="Enter Kin Phone Number">
    				    </div>

    				    <div class="form-group">
    				    	<label>Password</label>
    				    	<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
    				    </div>

    				    <div class="form-group">
    				    	<label>Confirm Password</label>
    				    	<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">
    				    </div>
    				    <input type="submit" name="create" value="Create Account" class="btn btn-info">
    				    <p>I already have an account<a href="patientlogin.php">Click Here</a></p>
    			</form>
    		</div>
    			<div class="col-md-3"></div>
    		</div>
    	</div>
    </div>
</body>
</html>