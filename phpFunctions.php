
   <?php

 include "database.php";

  
   function selectAllCasinos() {
    global $connection;
    $query = "SELECT * FROM admins";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        
    echo "<option value='$id'>$id</option>";
    
    }
    
}

?>