<html>
<head>
	<title>Add Data</title>
	
</head>

<body>
<?php
function Redirect($url){
	echo '<script>';
	echo "window.location.href = '$url';";
	echo '</script>';
	}
//including the database connection file
include_once("conn.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$carename = mysqli_real_escape_string($conn, $_POST['carename']);
	$county = mysqli_real_escape_string($conn, $_POST['county']);
	$photocare = mysqli_real_escape_string($conn, $_POST['photocare']);
	$latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
	$longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
		
	// checking empty fields
	if(empty($carename) || empty($county) || empty($photocare) || empty($latitude) || empty($longitude)) {


		if(empty($carename)) {
			echo "<font color='red'>NameCarcare field is empty.</font><br/>";
		}
        if(empty($county)) {
			echo "<font color='red'>County field is empty.</font><br/>";
        }
        
		if(empty($photocare)) {
			echo "<font color='red'>PhotoCare field is empty.</font><br/>";
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
		
		$result = mysqli_query($conn, "INSERT INTO carcare(carename,county,photocare,latitude,longitude) VALUES('$carename','$county','$photocare','$latitude','$longitude')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='listcarcare_admin.php'>View Result</a>";
	}
}
Redirect('listcarcare_admin.php');
?>
</body>
</html>
