<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Book Appointment</title>
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
            <h5 class="text-center my-2">Book Appointment</h5>
            <?php

                 if (isset($_POST['book'])) {
                   $firstname = $_POST['firstname'];
                   $surname = $_POST['surname'];
                   $disease = $_POST['disease'];
                   $phone = $_POST['phone'];
                   $date = $_POST['date'];
                   $symptoms = $_POST['symptoms'];

                  if (empty($firstname)) {

                  }else if (empty($surname)) {
                    
                  }else if (empty($disease)) {
                    
                  }else if (empty($phone)) {
                    
                  }else if (empty($symptoms)) {
                    
                     
                   }else{
                       $query = "INSERT INTO appointment(firstname,surname,disease,phone,appointment_date,symptoms,status,date_booked) VALUES('$firstname','$surname','$disease','$phone','$date','$symptoms','Pending',NOW())";

                  $res = mysqli_query($connect,$query);

                  if ($res) {
                     echo "<script>alert('You Have Booked An Appointment')</script>";
                  }
                   }
                 }


            ?>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron">
                  <form method="post">
                    <label>Patient's Firstname</label>
                    <input type="text" name="firstname" class="form-control" autocomplete="off" placeholder="Enter Patient's Firstname">

                    <label>Patient's Surname</label>
                    <input type="text" name="surname" class="form-control" autocomplete="off" placeholder="Enter Patient's Surname">

                    <label>Patient's Disease</label>
                    <input type="text" name="disease" class="form-control" autocomplete="off" placeholder="Enter Patient's Disease">

                    <label>Patient's Phone Number</label>
                    <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Patient's Phone Number">


                    <label>Appointment Date</label>
                    <input type="date" name="date" class="form-control">
                    
                    <label>Patient's Symptoms</label>
                    <input type="text" name="symptoms" class="form-control" autocomplete="off" placeholder="Enter Patient's Symptoms">
                    <input type="submit" name="book" class="btn btn-info my-2" value="Book Appointment">

                  </form>

                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
</body>
</html>