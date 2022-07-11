<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hypertension Triage Form</title>
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
                    <h5 class="text-center my-3">Hypertension Triage Form</h5>
                
                     <?php

                        if (isset($_POST['send'])) {
                            
                            $patientname = $_POST['patientname'];
                            $height = $_POST['height'];
                            $weight = $_POST['weight'];
                            $bloodpressure = $_POST['bloodpressure'];
                            $kidneyfunctiontest = $_POST['kidneyfunctiontest'];
                            $appearance = $_POST['appearance'];
                            $concerns = $_POST['concerns'];
                            $medication = $_POST['medication'];
                            $conclusion = $_POST['conclusion'];

                            if (empty($patientname)) {
                                
                            }else if (empty($height)) {

                            }else if (empty($weight)) {
                                
                            }else if (empty($bloodpressure)) {
                                
                            }else if (empty($kidneyfunctiontest)) {
                                
                            }else if (empty($appearance)) {
                                
                            }elseif (empty($concerns)) {
                                
                            }else if (empty($medication)) {

                            }else if (empty($conclusion)) {
                                
                            }else{
                                $user = $_SESSION['community health worker'];

                                $query = "INSERT INTO hypertensionreport(patientname,height,weight,bloodpressure,kidneyfunctiontest,appearance,concerns,medication,conclusion,username,date_send) VALUES('$patientname','$height','$weight','$bloodpressure','$kidneyfunctiontest','$appearance','$concerns','$medication','$conclusion','$user',NOW())";

                                $res = mysqli_query($connect,$query);

                                if ($res) {
                                    echo "<script>alert('Report Sent!!!')</script>";
                                }
                            }
                        }

                        ?>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 jumbotron bg-info">
                                    <h5 class="text-center my-2">Send A Report</h5>

                                    <form method="post">
                                        <label>Patient's Name</label>
                                        <input type="text" name="patientname" class="form-control" autocomplete="off" placeholder="Enter Patient's Name">

                                        <label>Height</label>
                                        <input type="text" name="height" class="form-control" autocomplete="off" placeholder="Enter Patient's height">

                                        <label>Weight</label>
                                        <input type="text" name="weight" class="form-control" autocomplete="off" placeholder="Enter Patient's Weight">

                                        <label>Blood Pressure</label>
                                        <input type="text" name="bloodpressure" class="form-control" autocomplete="off" placeholder="Enter Patient's Blood Pressure">

                                        <label>Kidney Function Test</label>
                                        <input type="text" name="kidneyfunctiontest" class="form-control" autocomplete="off" placeholder="Enter Patient's Kidney Function Test Status/Results">

                                        <label>Appearance</label>
                                        <input type="text" name="appearance" class="form-control" autocomplete="off" placeholder="Enter Patient's Appearance">

                                        <label>Concerns</label>
                                        <input type="text" name="concerns" class="form-control" autocomplete="off" placeholder="Enter Patient's Concerns">

                                        <label>Medication</label>
                                        <input type="text" name="medication" class="form-control" autocomplete="off" placeholder="Enter Medication Patient Is Taking At The Moment">

                                        <label>Conclusion</label>
                                        <input type="text" name="conclusion" class="form-control" autocomplete="off" placeholder="Enter Conclusion">

                                        <input type="submit" name="send" value="Send Report" class="btn btn-success my-2">

                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                              <div class="col-md-4">
                                 <a href="hypertensionpatient.php">
                                 </div>
                        </div>


                    </div>
          </div>

    </div>
</div>

</body>
</html>