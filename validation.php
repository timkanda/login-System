<?php
session_start(); 
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "user_registration_db";
$connection = mysqli_connect($host,$user,$pass,$db_name);

$name = $_POST["user"];
$pass = $_POST["password"];

$s = "SELECT * FROM `register` WHERE name='$name' && password = '$pass'";

$result = mysqli_query ($connection,$s);

 $num = mysqli_num_rows ($result);

if ($num==1){
    $_SESSION["username"] = $name;
   header ("location:home.php");

}else{
   header ("location:login.php");
}

 

?> 