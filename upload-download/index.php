<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
File upload: <input type="file" name="upload"><br>
<input type="submit" name="submit">
</form>
    <?php
    if(isset($_POST['submit'])){
     if($_FILES['upload']['error']>0){
         echo "Lỗi khi upload";
     }else
     {
         move_uploaded_file($_FILES['upload']['tmp_name'],'upload/'.$_FILES['upload']['name']);
         echo "<br>";
         echo "<pre>";
        print_r($_FILES['upload']);
        echo "<br>";
        $str="upload/".$_FILES['upload']['name'];
        echo "<br><br><a href='$str'>Download</a>";
     }
    }
    ?>
</body>
</html>