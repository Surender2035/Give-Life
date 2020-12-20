<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "give-life";
 
 $con = mysqli_connect($host, $user, $pass, $db);
 
 if($con){
     echo "Connected to Database";
 }else{
    echo "Failed to connect".mysqli_connect_error();
 }
 ?>