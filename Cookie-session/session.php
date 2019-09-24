<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
Tên đăng nhập: <input type="text" name="user"><br>
Password: <input type="password" name="password"><br>
<input type="submit" name="gui" value="Đăng nhập hệ thống">
</form>
    <?php
    if(isset($_POST['gui'])){
      $_SESSION['user']=$_POST['user'];
      $_SESSION['pass']=$_POST['password'];
      header('location:showsession.php');
    }
    ?>
</body>
</html>