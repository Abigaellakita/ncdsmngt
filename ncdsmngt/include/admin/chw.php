<?php
   session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Total Community Health Workers</title>
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
     				<?php

                    $query = "SELECT * FROM chws WHERE status='Approved' ORDER BY date_reg ASC";
                    $res = mysqli_query($connect,$query);

                    $output = "";


$output .="

    <table class='table table-borderd'>
       <tr>
           <th>ID</th>
           <th>Firstname</th>
           <th>Surname</th>
           <th>Username</th>
           <th>Email</th>
           <th>Gender</th>
           <th>Phone</th>
           <th>County</th>
           <th>Subcounty</th>
           <th>Hospitals</th>
           <th>Date Registered</th>
       </tr>
";


if (mysqli_num_rows($res) < 1) {
	$output .= "

          <tr>
          <td colspan='10' class='text-center'>No Volunteers At The Moment</td>
          </tr>
	";
}

while ($row = mysqli_fetch_array($res)) {
	
	$output .="
           
        <tr>
          <td>".$row['id']."</td>
          <td>".$row['firstname']."</td>
          <td>".$row['surname']."</td>
          <td>".$row['username']."</td>
          <td>".$row['email']."</td>
          <td>".$row['gender']."</td>
          <td>".$row['phone']."</td>
          <td>".$row['county']."</td>
          <td>".$row['subcounty']."</td>
          <td>".$row['hospitals']."</td>
          <td>".$row['date_reg']."</td>
          <td>
             
           </td>

	";
}


   $output .="

      </tr>
      </table>
   ";


   echo $output;

     				?>

     			</div>
     		</div>
     	</div>

     </div>
</body>
</html>