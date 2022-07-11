<?php

include("../connection.php");


$id = $_POST['id'];

$query = "UPDATE healthcareworkers SET status='Approved' WHERE id='$id'";
mysqli_query($connect,$query);


$query = "UPDATE hospitals SET status='Approved' WHERE id='$id'";

mysqli_query($connect,$query);


$query = "UPDATE chws SET status='Approved' WHERE id='$id'";

mysqli_query($connect,$query);




?>