<?php

include "config.php";

if(!empty($_POST['hj']))
{
    $bid = $_POST['hj'];
    $sql_statement = "DELETE FROM movies WHERE movieid = $bid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}
else{
    echo "sdfs";
}

?>