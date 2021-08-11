<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prework</title>
</head>
<body>
     <?php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "employees";

$connect = mysqli_connect($localhost, $username, $password, $dbname);
if (!$connect) {
   die("Connection failed: " . mysqli_connect_error());
}else {
    echo "Connected successfully <br>";
}

?>


</body>
</html>