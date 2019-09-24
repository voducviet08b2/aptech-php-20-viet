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

    <?php
    if(isset($_SESSION['user'])&&isset($_SESSION['pass'])){
        echo "ten truy cap: ".$_SESSION['user'];
        echo "<br>password: ".$_SESSION['pass'];    
    }else 
    {
        echo "Thiếu thông tin";
    }
    ?>
      <br>
    <a href="session.php">Trở lại trang đăng nhập</a>
    <br>
    <a href="deletesession.php">Tiến hành hủy session</a>
</body>
</html>