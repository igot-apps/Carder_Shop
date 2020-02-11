<?php
ob_start();
session_start();
// session_destroy();


$SEVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "cshop";

$conn = new mysqli($SEVER, $USER, $PASSWORD , $DATABASE);
if (!$conn){
    die("Database Connection Failed" . $conn->mysql_error());
}else{
   
	echo "Connected to Database successfull";
}

// $result = $conn->query("SELECT * FROM users") ;
 
// while ($row = $result->fetch_assoc()) {
// echo $row['username']."</br>";
// }


   // if (!isset($_SESSION['loggedin_user'])) header('Location: login.php?login_required=1'); 

?>