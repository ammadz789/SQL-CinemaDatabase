<?php 

    include "config.php";

	$email = $name = $password = '';
	$errors = array('email' => '', 'name' => '', 'password' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check name
		if(empty($_POST['name'])){
			$errors['name'] = 'A name is required';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
				$errors['name'] = 'Name must be letters and spaces only';
			}
		}

		// check password
		if(empty($_POST['password'])){
			$errors['password'] = 'Password is required';
		} 

		if(array_filter($errors)){
			
		} else {

            $email = mysqli_real_escape_string($db, $_POST['email']);
			$name = mysqli_real_escape_string($db, $_POST['name']);
			$password = mysqli_real_escape_string($db, $_POST['password']);


            $sql = "INSERT INTO customer(name) VALUES ('$name')";
            
            if(mysqli_query($db, $sql)){
				// success
				header('Location: movies.php');
			} else {
				echo 'query error: '. mysqli_error($db);
			}

		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Create an account</h4>
		<form class="white" action="addcustomer.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Your name</label>
			<input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
			<div class="red-text"><?php echo $errors['name']; ?></div>
			<label>Password</label>
			<input type="password" name="password" value="<?php echo htmlspecialchars($password) ?>">
			<div class="red-text"><?php echo $errors['password']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>


</html>