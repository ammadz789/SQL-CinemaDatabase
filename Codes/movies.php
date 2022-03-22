<?php

    include "config.php";

	
	$sql = 'SELECT moviename, movieid FROM movies';

	// get the result set (set of rows)
	$result = mysqli_query($db, $sql);

	// fetch the resulting rows as an array
	$allmovies = mysqli_fetch_all($result, MYSQLI_ASSOC);

	
	mysqli_free_result($result);

	// close connection
	mysqli_close($db);


?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<h4 class="center white-text">Movies in theatre:</h4>

	<div class="container">
		<div class="row">

			<?php foreach($allmovies as $movie){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($movie['moviename']); ?></h6>
							<div><?php echo htmlspecialchars($movie['movieid']); ?></div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="https://www.imdb.com/">more info</a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>


</html>