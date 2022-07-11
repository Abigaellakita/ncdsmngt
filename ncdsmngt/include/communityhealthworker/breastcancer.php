<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Breast Cancer Triage Form</title>
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
                    <h5 class="text-center my-3">Breast Cancer Triage Form</h5>
                
                     <?php

                        if (isset($_POST['send'])) {
                            
                            $patientname = $_POST['patientname'];
                            $bloodpressure = $_POST['bloodpressure'];
                            $bloodculture = $_POST['bloodculture'];
                            $kidneyfunctiontest = $_POST['kidneyfunctiontest'];
                            $liverfunctiontest = $_POST['liverfunctiontest'];
                            $ddimertest = $_POST['ddimertest'];
                            $appearance = $_POST['appearance'];
                            $concerns = $_POST['concerns'];
                            $medication = $_POST['medication'];
                            $conclusion = $_POST['conclusion'];

                            if (empty($patientname)) {
                                
                            }else if (empty($bloodpressure)) {

                            }else if (empty($bloodculture)) {
                                
                            }else if (empty($kidneyfunctiontest)) {
                                
                            }else if (empty($liverfunctiontest)) {
                                
                            }else if (empty($ddimertest)) {
                                
                            }else if (empty($appearance)) {
                                
                            }elseif (empty($concerns)) {
                                
                            }else if (empty($medication)) {

                            }else if (empty($conclusion)) {
                                
                            }else{
                                $user = $_SESSION['community health worker'];

                                $query = "INSERT INTO breastcancerreport(patientname,bloodpressure,bloodculture,kidneyfunctiontest,liverfunctiontest,ddimertest,appearance,concerns,medication,conclusion,username,date_send) VALUES('$patientname','$bloodpressure','$bloodculture','$kidneyfunctiontest','$liverfunctiontest','$ddimertest','$appearance','$concerns','$medication','$conclusion','$user',NOW())";

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

                                        <label>Blood Pressure</label>
                                        <input type="text" name="bloodpressure" class="form-control" autocomplete="off" placeholder="Enter Patient's Blood Pressure">

                                        <label>Blood Culture</label>
                                        <input type="text" name="bloodculture" class="form-control" autocomplete="off" placeholder="Enter Patient's Blood Culture Status/Results">

                                        <label>Kidney Function Test</label>
                                        <input type="text" name="kidneyfunctiontest" class="form-control" autocomplete="off" placeholder="Enter Patient's Kidney Function Test Status/Results">

                                        <label>Liver Function Test</label>
                                        <input type="text" name="liverfunctiontest" class="form-control" autocomplete="off" placeholder="Enter Patient's Liver Function Test Status/Results">

                                        <label>D-dimer Test</label>
                                        <input type="text" name="ddimertest" class="form-control" autocomplete="off" placeholder="Enter Patient's D-dimer Test Status/Results">

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
                                 <a href="breastcancerpatient.php">
                                 </div>
                        </div>


                    </div>
          </div>

    </div>
</div>

</body>
</html>