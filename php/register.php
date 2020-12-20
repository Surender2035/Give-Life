<?php
require 'init.php';
$name = $_POST['name'];
$city =$_POST["city"];
$number = $_POST["number"];
$blood_group = $_POST["blood_group"];
$email = $_POST["email"];
$password = $_POST["password"];



$sql = "INSERT INTO user_table (name,city,number,blood_group,email,password)
VALUES ('$name','$city','$number','$blood_group','$email','$password')";

$result = mysqli_query($con,$sql);
if($result){
    echo "success";
}else{
    echo "Error: ".mysqli_error($con);
}
mysqli_close($con);
?>
