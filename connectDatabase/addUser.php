<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="NgayHomNay";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email=$_POST['email'];
$password=$_POST['password'];
//$sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
$sql="INSERT INTO users(email,password) VALUES ('".$email."','".$password."')";


if (mysqli_query($conn, $sql)) {
     echo "Sign up successfully";
 } else {
     echo "Error creating database: " . mysqli_error($conn);
 }
header("Location:index.php");
mysqli_close($conn);

?>