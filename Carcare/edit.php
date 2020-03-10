<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$id_carcare = $_POST['id_carcare'];
	$status = $_POST['status'];
	
	mysqli_query($conn,"update usercare set  id_carcare='$id_carcare',status='$status' where id_care='$id'");
	header('location:allow_admin.php');
?>