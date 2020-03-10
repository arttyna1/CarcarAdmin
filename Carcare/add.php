<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("conn.php");

if(isset($_POST['Submit'])) {	
	$id_care = mysqli_real_escape_string($conn, $_POST['id_care']);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$careemail = mysqli_real_escape_string($conn, $_POST['careemail']);
	$carepassword = mysqli_real_escape_string($conn, $_POST['carepassword']);
	$carephone = mysqli_real_escape_string($conn, $_POST['carephone']);
	$namecarecare = mysqli_real_escape_string($conn, $_POST['namecarecare']);
	$careaddress = mysqli_real_escape_string($conn, $_POST['careaddress']);
	$carecity = mysqli_real_escape_string($conn, $_POST['carecity']);
	$latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
	$longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
	
		
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($careemail) || empty($carepassword) || empty($carephone ) || empty($namecarecare) || empty($careaddress) || empty($carecity) || empty($latitude) || empty($longitude)) {
				
		if(empty($fname)) {
			echo "<font color='red'>Firstname field is empty.</font><br/>";
		}
		
		if(empty($lname)) {
			echo "<font color='red'>Lastname field is empty.</font><br/>";
		}
		
		if(empty($careemail)) {
			echo "<font color='red'>careemail field is empty.</font><br/>";
		}
		if(empty($carepassword)) {
			echo "<font color='red'>CarePassword field is empty.</font><br/>";
		}
		
		if(empty($carephone)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		if(empty($namecarecare)) {
			echo "<font color='red'>NameCarecare field is empty.</font><br/>";
		}
		
		if(empty($careaddress)) {
			echo "<font color='red'>CareAddress field is empty.</font><br/>";
		}
		
		if(empty($carecity)) {
			echo "<font color='red'>Carecity field is empty.</font><br/>";
		}
		if(empty($latitude)) {
			echo "<font color='red'>Latitude field is empty.</font><br/>";
		}
		if(empty($longitude)) {
			echo "<font color='red'>Longtitude field is empty.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO usercare(fname,lname,careemail,carepassword,carephone,namecarecare,careaddress,carecity,latitude,longitude) VALUES('$fname','$lname','$careemail','$carepassword','$carephone','$namecarecare','$careaddress','$carecity')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='allow_admin.php'>View Result</a>";
	}
}
header('location:allow_admin.php');
?>
</body>
</html>
