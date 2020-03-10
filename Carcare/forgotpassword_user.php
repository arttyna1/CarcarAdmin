<?php
    require "conn.php";

    $email = $_POST["email"];
    $username = $_POST["username"];

    $sql = "SELECT email,password FROM user WHERE email='$email' AND username like '$username'";

    $result = mysqli_query($conn,$sql);
    $response = array();

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);

        mail($row["email"], "Your Account Password is " .$row["password"], "Central Carcare");
        echo "SUCCESS";
    }else
    echo "FAILED";
    mysqli_close($conn);
?>    