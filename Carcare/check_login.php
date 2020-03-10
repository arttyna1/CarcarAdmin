<?php 
session_start();
        if(isset($_POST['username'])){
				//connection
                  include("conn.php");
				//รับค่า user & password
                  $username = $_POST['username'];
                  $password = $_POST['password'];
				//query 
                  $sql="SELECT * FROM admin where username='".$username."' and password='".$password."' ";
 
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["id"] = $row["id"];
            
                      $_SESSION["status"] = $row["status"];
 
                      if($_SESSION["status"]=="Admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                        Header("Location: allow_admin.php");
 
                      }
 					      else{  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                  echo "<script>";
                        echo "alert(\" คุณไม่ใช่ Admin\");"; 
                        echo "window.history.back()";
                  echo "</script>";
 
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: allow_admin.php"); //user & password incorrect back to login again
 
        }
?>