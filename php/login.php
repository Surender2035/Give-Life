<?php
    require "init.php";

    $uname = $_POST["uname"];
    $psw = $_POST["psw"];

    $sql= "SELECT * from user_table where email = '$uname' and password = '$psw'";

    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_assoc($result);
        echo $rows["city"];
    }else{
        echo "Invalid Credentials";
    }

?>
