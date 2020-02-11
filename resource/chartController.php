<!--
<?php 
include_once("../includes/conn.php");
include_once("./functions.php");
 ?>
-->

<?php 





if (isset($_GET['product_id'])) {
	$product_id = $_GET['product_id'];
	if ( !isset($_SESSION['product_'.$product_id]) ) { $_SESSION['itemCount'] += 1; }
	 $_SESSION['product_'.$product_id]= $product_id;
	 
	 
	 
	 redirect("../creditCard.php");
	// $result = $conn->query("SELECT * FROM cards WHERE 	card_id=$pid ");
 //    //runQuery($query);

 //    while($row = $result->fetch_object()) {


      
 //    	echo $row->issuer;
        
 //      //  redirect("../chart.php");


      
 //  }

}

// $_SESSION['product_7'] = 7;
// $_SESSION['product_2'] = 2;
// $_SESSION['product_3'] = 3;
// $_SESSION['product_4'] = 4;
// $_SESSION['product_5'] = 5;
    
//echo "<br>";
function chart(){
foreach ($_SESSION as $key => $value) {
	// echo $key." = "; echo $value;
	// echo "<br>";

	if ($value > 0) {
		if (substr($key, 0, 8) == "product_" ) {
			$lenght = strlen($key);
			$id = substr($key, 8 , $lenght);

				$query = "SELECT * FROM cards WHERE card_id=$id ";
    $result = runQuery($query);

    	while ($row = $result->fetch_object()) {

    		$cardnumber = substr_replace($row->cardnumber, "******", 7);

$printTable =<<<EOT
<tr>
                    <td>$row->issuer</td>
                    <td>$cardnumber</td>
                    <td>$row->cardholder</td>
                    <td>***</td>
                    <td>****</td>
                    <td>$row->expiryyear</td>
                    <td>$row->amount</td>
                    <td>$row->country</td>
                    <td>$row->price</td>
                    
                </tr>
EOT;
echo $printTable;
}
		}
	}



   

}
}
//chart();
//print_r($_SESSION);


function ch(){
	echo "good";
}

 ?>