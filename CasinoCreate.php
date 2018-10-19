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


   <form action="CasinoCreate.php" method="post">
       Casino Name:
       <input type="varchar" name="name">
       <br>
       Casino Location:
       <input type="varchar" name="location">
       <br>
       Casino Opening Time:
<!--       for the purpose of this app I will be assuming the opening and closing times are the same every day-->
       <input type="time" name="open_times">
       Casino Closing Time:
       <input type="time" name="close_times">
       <input type="submit" name="submit" value="Submit">
   </form>
