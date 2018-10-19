<?php

    include "database.php";

//    SQL query
    $query = "SELECT * FROM admins";
    $queryName = "SELECT name FROM admins";
    $queryLocation = "SELECT location FROM admins";
    $queryOpenTime = "SELECT open_times FROM admins";
    $queryCloseTime = "SELECT close_times FROM admins";

//sending query
    $result = mysqli_query($connection, $query);
    $nameResult = mysqli_query($connection, $queryName);
    $locationResult = mysqli_query($connection, $queryLocation);
    $openTimeResult = mysqli_query($connection, $queryOpenTime);
    $closeTimeResult = mysqli_query($connection, $queryCloseTime);


    while($row = mysqli_fetch_assoc($result)){

        print_r(mysqli_fetch_assoc($nameResult));
        
//        $nameResultArr = (mysqli_fetch_assoc($nameResult));
//        echo json_encode($nameResultArr);
        ?>
        
        <br>
        
        <?php
        
        print_r(mysqli_fetch_assoc($locationResult));
        ?>
        
        <br>
        
        <?php
        print_r(mysqli_fetch_assoc($openTimeResult))
        ?>
        
        <br>
        
         <?php
        print_r(mysqli_fetch_assoc($closeTimeResult))
        ?>

        
        <hr>
        
        <?php
        
    }

?>