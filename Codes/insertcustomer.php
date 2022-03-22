<?php 

include "config.php"; 

if (!empty($_POST['name'])){ 
    $sname = $_POST['name']; 
    $sql_statement = "INSERT INTO customer(name) VALUES ('$sname')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
