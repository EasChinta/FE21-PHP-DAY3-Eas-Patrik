

<?php
    require_once 'db_connect.php';
   $sql = "SELECT * FROM test";
   $result = mysqli_query($connect, $sql);
   $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<a href="create.php">create new record</a><br><br> <!-- we will create this file later -->

<?php  
$i = 0;
while($i < count($rows)){
     echo "<p>" .$rows[$i]['first_name']." ".$rows[$i]['last_name' ]."<a href='delete.php?id=".$rows[$i]['id']."'>delete</a></p>";

    $i++;
}

// foreach ($rows as $row) {
//     echo "<p>" .$row['first_name']." ".$row['last_name' ]."</p>";
// }
?>



</body>
</html>