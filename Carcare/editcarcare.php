<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$carename = $_POST['carename'];
    $county = $_POST['county'];
    $photocare = $_POST['photocare'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
	
		//updating the table
		mysqli_query($conn, "update carcare set carename='$carename',county='$county',photocare='$photocare',latitude='$latitude',longitude='$longitude' where id='$id'");//แก้ตรง id_car >> id ถึงจะเชื่อมข้อมุลได้

		header("Location: listcarcare_admin.php");
?>