<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
<?php
$servername = "localhost";
 $username = "root";
 $password = "";
 $database="posts";
 $conn = mysqli_connect($servername, $username, $password,$database);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
    <div class="container">
        <div class="row">
<?php
$sql = "SELECT *
FROM baiviet AS a
INNER JOIN phanloai AS b
ON a.cat_id = b.id;
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
            <div class="col-4">
                <h3><?php echo $row['title'] ?></h3>
                <img class="img-fluid" src=<?php echo $row["img"]; ?> alt="">
                <p><?php echo $row["content"]; ?> </p>
                <a href="#"><?php echo $row["ten"]; ?> </a>
            </div>
<?php
  
}
} else {
echo "0 results";
}
$conn->close();
?>            
        </div>
    </div>
</body>

</html>