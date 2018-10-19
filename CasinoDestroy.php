<?php include "database.php";?>
<?php include "phpFunctions.php";?>

<?php     

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $location = $_POST['location'];
    $open_times = $_POST['open_times'];
    $close_times = $_POST['close_times'];
    $id = $_POST['id'];
    
$queryDelete = "DELETE FROM admins ";
$queryDelete .= "WHERE id = '$id' ";
    
    $resultDelete = mysqli_query($connection, $queryDelete);
    if(!$resultDelete) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Record Deleted"; 
    
    }
  
    }

?>

    <form action="CasinoDestroy.php" method="post">
        <!--     didnt name select -->
      <select name="id" id="">
        <?php
          
      $query = "SELECT * FROM admins";
          $result = mysqli_query($connection, $query);
          if(!$result) {
            die('Query FAILED' . mysqli_error());
          }
          
          while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            
            echo "<option value='$id'>$id</option>";
            
    
    }
        ?>
      </select>
      <br>
       Casino Name:
       <input type="varchar" name="name" >
       <br>
       Casino Location:
       <input type="varchar" name="location">
       <br>
       Casino Opening Time:
       <input type="time" name="open_times">
       Casino Closing Time:
       <input type="time" name="close_times">
       <input type="submit" name="submit" value="Submit">
   </form>
