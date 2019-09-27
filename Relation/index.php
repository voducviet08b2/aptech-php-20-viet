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


$servername = "localhost";
$username = "root";
$password = "";
$database="relation";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "SELECT *
FROM users AS a
INNER JOIN passport AS b
ON a.pp_id = b.id
WHERE a.pp_id=2;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["info"]. "<br>";
    }
} else {
    echo "0 results";
}
// $sql = "SELECT * FROM NgayHomNay.users WHERE email='" . $_POST['email'] . "'";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
mysqli_close($conn);

?>
</body>
</html>