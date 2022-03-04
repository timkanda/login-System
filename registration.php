<?php
session_start();
header ("location:login.php");
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "user_registration_db";
$connection = mysqli_connect($host,$user,$pass,$db_name);
$name = $_POST["user"];
$password = $_POST["password"];
$s = "SELECT * FROM `register` WHERE name='$name'";
$result = mysqli_query ($connection,$s);
$num = mysqli_num_rows ($result);
if ($num==1){
    echo "username already taken";

}else{
    $reg= "INSERT INTO `register`(`name`, `password`) VALUES ('$name','$password')";
    mysqli_query($connection,$reg);
    echo "registration successful";
}

 

?>