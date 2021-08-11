

<?php
require_once 'db_connect.php';
if(isset($_GET["id"])){
    $id = $_GET["id"]; // graphing the id value that is in the url
    $sql = "DELETE FROM dishes WHERE id = $id";
    if(mysqli_query($connect, $sql) == true){
        echo "Record deleted <br>
         <a href='index.php'>Home</a>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>