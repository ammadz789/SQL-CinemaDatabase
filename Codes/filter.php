<?php 

include "config.php"; 

if (!empty($_POST['Moviename3'])){ 
    $sname = $_POST['Moviename3'];
    $sql_statement = "SELECT moviename,movieid FROM movies WHERE  moviename = '$sname'"; 

    $result = mysqli_query($db, $sql_statement);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "name: " . $row["moviename"]."  ". "id: " . $row["movieid"]. "<br>";
        }
      } else {
        echo "0 results";
      }

} 


?>