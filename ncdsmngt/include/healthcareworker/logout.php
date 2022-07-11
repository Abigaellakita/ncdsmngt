<?php
session_start();

if (isset($_SESSION['healthcare worker'])) {
	
	unset($_SESSION['healthcare worker']);

	header("Location: ../index.php");
}
?>