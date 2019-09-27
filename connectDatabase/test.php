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
$sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   echo "Login succesful";
    
} else {
    echo "0 results";
}
mysqli_close($conn);

?>