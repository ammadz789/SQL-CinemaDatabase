<?php 

include "config.php";

?>
<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
<h2 align=center>Admin panel</h2>
<div align=right>
<h3>customers table</h3>


<form action="delete.php" method="POST">
<select name="ids">



<?php

$sql_command = "SELECT cid, name FROM customer";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $bid = $id_rows['cid'];
        $bname = $id_rows['name'];
        echo "<option value=$bid>". $bname ."-".$bid."</option>";
    }

?>


</select>
<button>DELETE</button>
</form>



<form action="filtercust.php" method="POST">
    customer Name to search: 
    <input type="text" id="name" name="name3"> 

    
    <input type="submit" value="Search"> 
</form>


<form action="insertcustomer.php" method="POST"> 
    customer Name to add: 
    <input type="text" id="name" name="name"> 

    
    <input type="submit" value="Submit"> 
</form> 
</div>
<div align="left">
    <h2>movies table</h2>
<form action="deletemov.php" method="POST">
<select name="hj">

<?php

$sql_command = "SELECT moviename, movieid FROM movies";


$myresult = mysqli_query($db, $sql_command);

    while($id_rows1 = mysqli_fetch_assoc($myresult))
    {
        $bid = $id_rows1['movieid'];
        $bname = $id_rows1['moviename'];
        echo "<option value=$bid>". $bname ."-".$bid."</option>";
    }

?>

</select>
<button>DELETE</button>
</form>


<form action="filter.php" method="POST">
    movie Name to search: 
    <input type="text" id="name" name="Moviename3"> 

    
    <input type="submit" value="Search"> 
</form>


<form action="insertmov.php" method="POST"> 
    movie Name to add: 
    <input type="text" id="name" name="Moviename"> 

    
    <input type="submit" value="Submit"> 
</form> 


</div>
</body>

</html>