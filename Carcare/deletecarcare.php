<?php
//including the database connection file
include("conn.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
mysqli_query($conn, "delete from carcare where id = $id");

//redirecting to the display page (index.php in our case)
header("Location:listcarcare_admin.php");
?>

