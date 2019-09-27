<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
<body>
<div class="d-flex">
<form action="test.php" method="post">
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-secondary">Log in</button>
</form>

<form action="addUser.php" method="post">
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
</div>
<!-- <form action="test.php" method="post">
email: <input type="text" name="email"><br>
password: <input type="text" name="password"><br>
<input type="submit" name="gui" value="Log in"> 
</form> -->
<!-- <form action="addUser.php" method="post">
email: <input type="text" name="email1"><br>
password: <input type="text" name="password1"><br>
<input type="submit" name="gui" value="Sign up">
</form> -->
<br><br>
<table style="width:100%">
  <caption>Danh sách thành viên</caption>
  <tr>
    <th>STT</th>
    <th>Email</th>
    <th>Password</th>
  </tr>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database="NgayHomNay";
 $conn = mysqli_connect($servername, $username, $password,$database);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,email,password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>

  <tr>
    <td><?php echo $row["id"]; ?> </td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
  </tr>

<?php
  
}
} else {
echo "0 results";
}
$conn->close();
?>
</table>      



</body>

</html>
<?php

// if(isset($_POST['gui'])){
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// $sql = "SELECT * FROM NgayHomNay.users WHERE email='" . $_POST['email'] . "'";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
// mysqli_close($conn);
//}
?>
