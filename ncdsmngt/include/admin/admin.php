<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<?php
include("../header.php");
?>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
	<div class="col-md-2" style="margin-left: -30px;">
		<?php
		include("sidenav.php");
		include("../connection.php");
		?>
	</div>
	<div class="col-md-10">
		<div class="col-md-12">
			<div class="row">
			   <div class="col-md-6">
			   	<h5 class="text-center">All Admin</h5>

			   	<?php
			   	  $ad = $_SESSION['admin'];
                  $query = "SELECT * FROM admin WHERE username !='$ad'";
                  $res = mysqli_query($connect,$query);
                  $output = "
                       <table class='table table-bordered'>
                       <tr>
                	<th>UserID</th>
                	<th>Username</th>
                	<th>Action</th>
                	<tr>
                  ";


                  if (mysqli_num_rows($res) < 1 )
                  {
                  	$output .= "<tr><td colspan='2' class='text-center'>No New Admin</td></tr>";
                  }

                  while ($row = mysqli_fetch_array($res)) {

                  	$userid = $row['id'];
                    $username = $row['username'];

                    
                    $output .="
                       <tr>
                		<td>$userid</td>
                		<td>$username</td>
                		<td>
                			<a href='admin?id=$userid'><button userid='$userid' class='btn btn-danger remove'>Remove</button></a>
                		</td>

                    ";
                  }

                  $output .="
                  </tr>
                </table>

                  ";
                  echo $output;




                  if (isset($_GET['userid'])) {
                  	$userid = $_GET['userid'];
                  	$query = "DELETE FROM admin WHERE userid='$userid'";
                  	mysqli_query($connect,$query);
                  }
			   	?>

			   </div>
			   <div class="col-md-6">
			   	<?php
			   	if (isset($_POST['add'])) {
			   		$user = $_POST['user'];
			   		$pass = $_POST['pass'];
			   		$image = $_FILES['img']['name'];

			   		$error = array();
			   		if (empty($user)) {
			   			$error['u'] = "Enter Admin Username";
			   		}elseif (empty($pass)) {
			   			$error['u'] = "Enter Admin Password";
			   		}else if (empty($image)) {
			   			$error['u'] = "Add Admin Photo";
			   		}

			   		if (count($error) ==0) {
			   			$q = "INSERT INTO admin(username,password,profile) VALUES('$user','$pass','$image')";
			   			$result = mysqli_query($connect,$q);

			   			if ($result) {
			   			move_uploaded_file($_FILES['img']['tmp_name'], "img/$image");
			   			}else{

			   			}
			   		}
			   	}



			   	if (isset($error['u'])) {
			   	   	$er = $error['u'];
			   	   	$show = "<h5 class='text-center alert alert-danger'>$er</h5>";
			   	}else{
			   		$show = "";
			   	}
			   	?>
			   	<h5 class="text-center">Add Admin</h5>
			   	<form method="post" enctype="multipart/form-data">
			   		<div>
			   			<?php echo $show;

			   			?>
			   		</div>
			   		<div class="from-group">
			   			<label>Username</label>
			   			<input type="text" name="user" class="form-control" autocomplete="off">
			   		</div>
			   		<div class="from-group">
			   			<label>Password</label>
			   			<input type="password" name="pass" class="form-control">
			   			
			   		</div>

			   		<div class="from-group">
			   			<label>Add Admin Photo</label>
			   			<input type="file" name="img" class="form-control">
			   			<br>
			   		</div>
			   		<input type="submit" name="add" value="Add New Admin" class="btn btn-success">
			   	</form>
			   </div>
				
			</div>
			
		</div>
	</div>
</div>
	

</div>
	
</div>
</body>
</html>