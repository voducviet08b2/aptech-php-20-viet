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
    if(isset($_COOKIE['user'])&&isset($_COOKIE['pass'])){
     echo "ten truy cap: ".$_COOKIE['user'];
     echo "<br>password: ".$_COOKIE['pass'];
    }
    else echo "User or password bị thiếu";
    ?>
    <br>
    <a href="cookie.php">Trở lại trang đăng nhập</a>
    <br>
    <a href="deletecookie.php">Tiến hành hủy Cookie</a>
</body>
</html>