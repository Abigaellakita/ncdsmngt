<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Asthma Triage Form</title>
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
                    <h5 class="text-center my-3">Asthma Triage Form</h5>
                
                     <?php

                        if (isset($_POST['send'])) {
                            
                            $patientname = $_POST['patientname'];
                            $temperature = $_POST['temperature'];
                            $pulserate = $_POST['pulserate'];
                            $respirationrate = $_POST['respirationrate'];
                            $bloodpressure = $_POST['bloodpressure'];
                            $appearance = $_POST['appearance'];
                            $concerns = $_POST['concerns'];
                            $medication = $_POST['medication'];
                            $conclusion = $_POST['conclusion'];

                            if (empty($patientname)) {
                                
                            }else if (empty($temperature)) {

                            }else if (empty($pulserate)) {
                                
                            }else if (empty($respirationrate)) {
                                
                            }else if (empty($bloodpressure)) {
                                
                            }else if (empty($appearance)) {
                                
                            }elseif (empty($concerns)) {
                                
                            }else if (empty($medication)) {

                            }else if (empty($conclusion)) {
                                
                                
                            }else{
                                $user = $_SESSION['community health worker'];

                                $query = "INSERT INTO asthmareport(patientname,temperature,pulserate,respirationrate,bloodpressure,appearance,concerns,medication,conclusion,username,date_send) VALUES('$patientname','$temperature','$pulserate','$respirationrate','$bloodpressure','$appearance','$concerns','$medication','$conclusion','$user',NOW())";

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

                                        <label>Temperature</label>
                                        <input type="text" name="temperature" class="form-control" autocomplete="off" placeholder="Enter Patient's Temperature">

                                        <label>Pulserate</label>
                                        <input type="text" name="pulserate" class="form-control" autocomplete="off" placeholder="Enter Patient's Pulserate">

                                        <label>Respiration Rate</label>
                                        <input type="text" name="respirationrate" class="form-control" autocomplete="off" placeholder="Enter Patient's Respiration Rate">

                                        <label>Blood Pressure</label>
                                        <input type="text" name="bloodpressure" class="form-control" autocomplete="off" placeholder="Enter Patient's Blood Pressure">

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
                                                <a href="asthmapatient.php">
                                            </div>
                            
                        </div>


                    </div>
          </div>

    </div>
</div>

</body>
</html>