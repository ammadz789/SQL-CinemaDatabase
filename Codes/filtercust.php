<?php 

include "config.php"; 

if (!empty($_POST['name3'])){ 
    $sname = $_POST['name3'];
    $sql_statement = "SELECT name,cid FROM customer WHERE  name = '$sname'"; 

    $result = mysqli_query($db, $sql_statement);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "name: " . $row["name"]."  ". "id: " . $row["cid"]. "<br>";
        }
      } else {
        echo "0 results";
      }

} 


?>
