<?php
session_start();

if (isset($_SESSION['community health worker'])) {
	
	unset($_SESSION['community health worker']);

	header("Location: ../index.php");
}
?>