<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="post.php" method="post">
Name: <input type="text" name="name"><br>
Dia chi: <input type="text" name="diachi"><br>
<input type="submit" name="gui">
</form>
    <?php
    if(isset($_POST['gui'])){
        echo "<h1>Ten la: </h1><br>".$_POST['name'];
        echo "<h1>Dia chi la: </h1><br>".$_POST['diachi'];
    }
    ?>
</body>
</html>