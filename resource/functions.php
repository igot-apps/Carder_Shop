<?php 





function redirect($location){

return header("Location: $location ");


}


function runQuery($sql) {

global $conn;

//return mysqli_query($conn, $sql);
if ($result = $conn->query($sql) ) {

   return $result;


}else{

	echo "query failed";
}

}


function escape_string($string){

global $conn;

return $conn->escape_string($string);


}


function display_error(){
	global $error;
	$br = '<br>';
	if (count($error) == 1) $br = '';
	if (!empty($error)){ 
		echo "<div /**class='error'**/>";
		foreach($error as $er):
		echo $er . $br;
		endforeach;
		echo "</div>";
	}
}

if ( isset($_GET['function']) ) {

		if ( $_GET['function'] == 'logout') {

				// unset user_login session.
		unset($_SESSION['loggedin_user']);
		session_destroy();
		 
		// Go back to index page.
		redirect('../login.php');
	}
		
	}


?>