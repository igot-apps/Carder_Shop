<?php include_once("./includes/conn.php"); ?>
<?php include("./resource/functions.php");  ?>
<?php 

 // if (isset($_GET['login_required'])) $error[] = "You must be logged in to access this page.";
 
				if (isset($_POST['submit']) == 'login') : // If form is submitted
				 
				
				$email = ($_POST['email']);
				$password = ($_POST['password']);

				
				 
				// Check if all fields are emptyy.
				if ($email == '' || $password == '' ) $error[] = "All fields are required.";
				 // echo "fieds are empty";
				if (empty($error)){
					
				  $hashed_password = sha1($password);
				 
				  // Check if submitted info is correct or not.
				  $check = runQuery("SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".$password."'");
				 
				  if ($check->num_rows == 1) {
				  	$result = $check;
				  	
				  	$row = $result->fetch_object();
						
					// User found, now set session and proceed to my-account page.
					$_SESSION['loggedin_user'] = $row->username;
					redirect('./creditcard.php');
					
				  } else {
				  	$error[] = "Incorrect username or password.";
				  	 // redirect('./login.php');
				  }


				  
				}
				 
				endif;

				

?>