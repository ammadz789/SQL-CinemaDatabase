<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $bid = $_POST['ids'];
    $sql_statement = "DELETE FROM customer WHERE cid = $bid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}
else{
    echo "sdfs";
}

?>