<?php 

include "config.php"; 

if (!empty($_POST['Moviename'])){ 
    $sname = $_POST['Moviename']; 
    $sql_statement = "INSERT INTO movies(Moviename) VALUES ('$sname')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
