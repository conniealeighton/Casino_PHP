<?php 

include "database.php";

$query = "SELECT * FROM admins";

$result = mysqli_query($connection, $query);

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $location = $_POST['location'];
    $open_times = $_POST['open_times'];
    $close_times = $_POST['close_times'];
    $id = $_POST['id'];
    
    
    $queryUpdate = "UPDATE admins SET ";
    $queryUpdate .= "name = '$name' ";
    $queryUpdate .= "location = '$location' ";
    $queryUpdate .= "open_times = '$open_times' ";
    $queryUpdate .= "close_times = '$close_times' ";
    $queryUpdate .= "WHERE id = '$id' ";
    
    $resultUpdate = mysqli_query($connection, $queryUpdate);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Casino Details Updated"; 
    
    }
//    
//    getNameFromId(){
//        
//    }
}

?>

<!--   post updates to CasinoCreate. While sql can fetch the $result take the $id and populate the dropdown options with the various id's-->

   <form action="CasinoCreate.php" method="post">
      <select name="id" id="">
            <?php
             while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        
    echo "<option value='$id'>$id</option>";
    
    }
          ?>
      </select>
      <br>
       Casino Name:
       <input type="varchar" name="name" value="$id">
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


