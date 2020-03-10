<?php
//including the database connection file
include("conn.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
mysqli_query($conn, "delete from usercare where id_care = $id");

//redirecting to the display page (index.php in our case)
header("Location:allow_admin.php");
?>

