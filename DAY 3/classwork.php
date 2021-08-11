<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="styles.css" rel="stylesheet">
    <title>Classwork</title>
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
                <a class="nav-link" href="exercise6.php">Home</a>
            </li>
        </ul>
    </div>

<div class="container">
    <!-- EXERCISE 1 -->
    <section>
        <h1>EXERCISE 1</h1>
        <?php
        $myName = "Nick";
        // for ($i=0; $i<50; $i++){

        //    echo ("This is my name $myName <br>");
        // }

        // while($i<50){
        //     $i++;
        //     echo ("This is my name $myName <br>");
        // }

        do {
            $i++;
            echo ("This is my name $myName <br>");
        } while ($i < 50);



        ?>
    </section>

    <!-- EXERCISE 2 -->

    <section>
        <h1>EXERCISE 2</h1>

        <?php
        $array = array(2, 4, 5, 6, 9, 32, 34, 545, 221, 43, 1);

        foreach ($array as $val) {
            echo "Value is $val <br>";
        }
        ?>
    </section>


    <!-- EXERCISE 3 -->

    <section>
        <h1>EXERCISE 3</h1>

        <?php

        function exercise3()
        {
            for ($i = 0; $i < 10; $i++) {
                $array[$i] = array(rand(1,10));
            }
            // print_r($array);
            echo "<br>" .(max($array)[0]) . "<br>";
            
        }
        exercise3();
        ?>
    </section>


   <!-- EXERCISE 4 -->

   <section>
        <h1>EXERCISE 4</h1>

        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 15 == 0) {
                echo "FullStack<br>";
            } elseif ($i % 3  == 0) {
                echo "Front-end<br>";
            } elseif ($i % 5 == 0) {
                echo "Back-end <br>";
            } else {
                echo $i . "<br>";
            }
        }
        ?>
    </section>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>