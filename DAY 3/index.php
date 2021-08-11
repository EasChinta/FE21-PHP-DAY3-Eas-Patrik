<?php
require 'db_connect.php';
require 'create.php';
require 'delete.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Index</title>
</head>

<body>
    <div class="container">
        <ul class="nav justify-content-start menu">
            <li class="nav-item">
                <a class="nav-link active animate__animated animate__backInLeft animate__delay-2s	" aria-current="page" href="classwork.php">Classwork</a>
            </li>
            <li class="nav-item active animate__animated animate__backInDown animate__delay-2s	">
                <a class="nav-link" href="index.php">Advanced</a>
            </li>
            <li class="nav-item active animate__animated animate__backInDown animate__delay-2s	">
                <a class="nav-link" href="index.php">Home</a>
            </li>
        </ul>
    </div>
    <div class="container">



        <div class="row">
        <?php

        // if ($connect->connect_error) {
        //     die("Connection failed: " . $connect->connect_error);
        // } else {
        //     echo "Successfully Connected";
        // };


        $sql = "SELECT * FROM dishes";
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);



        foreach ($rows as $val) {
            echo '<div class="container shadow mt-5 col col-12 col-sm-12 col-md-6 col-lg-3"
            <div class="card" style="width: 18rem;">
            <img src=' . $val["image"] . ' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">' . $val["name"] . '</h5>
              <p class="card-text">' . $val["description"] . '<br> ' . $val["price"] . '</p>
              <a href="index.php?id=' . $val["id"] . '" class="btn btn-outline-success">Delete</a>
            </div>
          </div>

          ';
        }


        ?>

</div>

        <form method="post">
            <input type="text" name="name" placeholder="name">
            <input type="url" name="image" placeholder="image">
            <input type="number" name="price" placeholder="price">
            <input type="text" name="description" placeholder="description">
            <input type="submit" name="submit" value="Add dish">
        </form>

        <?php
        ?>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>