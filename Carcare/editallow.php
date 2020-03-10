<?php>
	include('conn.php');
	
	$id_care = $_GET['id_care'];
	$id_carcare = $_POST['id_carcare'];
	$status = $_POST['status'];
	
	
		//updating the table
		mysqli_query($conn, "UPDATE usercare SET id_carcare='$id_carcare',status='$status' WHERE id_care=$id_care");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: allow_admin.php");
	
?>