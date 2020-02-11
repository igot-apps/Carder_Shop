<?php 

	include("conn.php");



function redirect($location){

return header("Location: $location ");


}

function runQuery($sql) {

global $conn;

//return mysqli_query($conn, $sql);
if ($result = $conn->query($sql) ) {

    while($row = $conn->fetch_assoc($result)){
    
        return $row;
        
    }
    
    

} else {
    
    die("QUERY FAILED " . $conn->connect_error);

}


}


function escape_string($string){

global $conn;

return $conn->escape_string($string);


}

?>