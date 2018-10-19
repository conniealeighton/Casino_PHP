<?php 

include "database.php";

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$location = $_POST['location'];
$open_times = $_POST['open_times'];
$close_times = $_POST['close_times'];


    
//  quotation marks around variables
    $query = "INSERT INTO admins(name, location, open_times, close_times) ";
    $query .= "VALUES ('$name', '$location', '$open_times', '$close_times')";
    

    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("Query failed");
    }
    
    else{
        echo "Casino details sucessfully submitted";
    }
    

}



?>

