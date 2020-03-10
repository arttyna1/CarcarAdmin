<?php
    require "conn.php";

    $careemail = $_POST["careemail"];
    $namecarecare = $_POST["namecarecare"];

    $sql = "SELECT careemail,carepassword FROM usercare WHERE careemail='$careemail' AND namecarecare like '$namecarecare'";

    $result = mysqli_query($conn,$sql);
    $response = array();

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);

        mail($row["careeemail"], "Your Account Password is " .$row["carepassword"], "Central Carcare");
        echo "SUCCESS";
    }else
    echo "FAILED";
    mysqli_close($conn);
?>    