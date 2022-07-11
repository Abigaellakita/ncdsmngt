<?php

include("../connection.php");


$id = $_POST['id'];

$query = "UPDATE healthcareworkers SET status='Rejected' WHERE id='$id'";
mysqli_query($connect,$query);

$query = "UPDATE hospitals SET status='Rejected' WHERE id='$id'";

mysqli_query($connect,$query);


$query = "UPDATE chws SET status='Rejected' WHERE id='$id'";

mysqli_query($connect,$query);
?>