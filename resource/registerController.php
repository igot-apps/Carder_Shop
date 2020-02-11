<?php include_once("./includes/conn.php"); ?>
<?php include("./resource/functions.php");  ?>
<?php 

if (isset($_POST['submit'])) {

						$email = ($_POST['email']); 
						$username = ($_POST['username']);
						$password = ($_POST['password']);
						$confirm_password = ($_POST['confirm_password']);
						 
						$hashed_password = sha1($password);
						 
						// Check if all fields are empty.
						if ($email == '' || $username == '' || $password == '' || $confirm_password == '') $error[] = "All fields are required.";
						 
						// Check if that username is already exists.
						$find_user = runQuery("SELECT * FROM `users` WHERE `username` = '".$username."'");
						if (mysqli_num_rows($find_user) != 0) $error[] = "Username is already exist.";
						 

						// Check if confirm password did not match.
						if (empty($error) && $confirm_password != $password) $error[] = "Confirm Password did not match.";
						 
						// If no errors then go ahead.
						if (empty($error)){
						 
							$result = runQuery(" INSERT INTO `users` (
							`username`,
							`email`,
							`password`
							) VALUES (
							'".$username."',
							'".$email."',
							'".$password."'
							)");
							
							if($result) {
								$error[] = "User Registered ! . Continue to login please";
								//redirect('../login.php?signup=1');
							}
							
							
						}
}						

?>