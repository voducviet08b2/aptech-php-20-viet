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
    $name=$_GET['name'];
    $pass=$_GET['pass'];
    if($name=="viet"&&$pass=="1234")
    {
        echo "<h3>Successfull log in</h3>";
        header('Location: https://google.com/');
    }
    else {
        echo "<h3>fail log in</h3>";
    }
    ?>
</body>
</html>