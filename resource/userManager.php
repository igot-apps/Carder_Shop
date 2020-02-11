<?php include("../includes/conn.php"); ?>
<?php include("./functions.php"); ?>
<?php 
 
	
	if (isset($_POST['submit'])) {
		
		$check = $_POST['submit'];
		switch ($check) {
			case 'login':

				if (isset($_GET['login_required'])) $error[] = "You must be logged in to access this page.";
 
				if (isset($_POST['submit']) == 'login') : // If form is submitted
				 
				$username = ($_POST['username']);
				$email = ($_POST['email']);
				$password = ($_POST['password']);

				echo $username;
				echo "lost";
				 
				// Check if all fields are emptyy.
				if ($username == '' || $password == '' || $email == '') $error[] = "All fields are required.";
				 // echo "fieds are empty";
				if (empty($error)){
					
				  $hashed_password = sha1($password);
				 
				  // Check if submitted info is correct or not.
				  $check = runQuery("SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."'");
				 
				  if ($check->num_rows == 1) {
						
					// User found, now set session and proceed to my-account page.
					$_SESSION['loggedin_user'] = $username;
					redirect('../creditcard.php');
					
				  } else {
				  	$error[] = "Incorrect username or password.";
				  	redirect('../login.php');
				  }


				  
				}
				 
				endif;
				break;

			case 'register':
					echo "reg";


						$email = ($_POST['email']); 
						$username = ($_POST['username']);
						$password = ($_POST['password']);
						$confirm_password = ($_POST['confirm_password']);
						 
						$hashed_password = sha1($password);
						 
						// Check if all fields are empty.
						if ($email == '' || $username == '' || $password == '' || $confirm_password == '') $error[] = "All fields are required.";
						 
						// Check if that username is already exists.
						$find_user = runQuery("SELECT * FROM `users` WHERE `username` = '".$username."'");
						if (mysqli_num_rows($find_user) != 0) $error[] = "That username is already exist.";
						 

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
								redirect('../login.php?signup=1');
							}
							
							
						}
						 
						
					break;	
			
			default:
				# code...
				break;


		}
	}


	if ( $_GET['function'] ) {

		if ( $_GET['function'] == 'logout') {

				// unset user_login session.
		unset($_SESSION['loggedin_user']);
		 
		// Go back to index page.
		redirect('../login.php');
	}
		
	}

	


	


?>
