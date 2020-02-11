<?php 

/**
 * 
 */
class CreditCard
{
	private static $product_ids = [];
	public static $name = "abraham";
	private static $index = 0;
	function __construct()
	{
		
	}

	public static function addProductId($product_id){
		
		
		array_push(self::$product_ids,$product_id);
		#print_r($this->product);

	}

	public static function addProductIdByIndex($product_id){
		
		$index = self::$index;
		self::$product_ids[$index] = $product_id;
		print_r(self::$product_ids[$index]);
		$index++;

	}

	public static function getProductIds(){
		//echo self::$name;
		return self::$product_ids;

	}

	public static function test(){
		echo "test thid id the best";
	}

}

// print_r(CreditCard::addProductIdByIndex(90));
// print_r(CreditCard::addProductIdByIndex(92));
// print_r(CreditCard::addProductIdByIndex(50));
// print_r(CreditCard::addProductId(20));
 // print_r(CreditCard::getProductIds());
#$CreditCard = new CreditCard();
#$CreditCard->setProducts(360);
#print_r($CreditCard->product);
// $CreditCard->test();

// $productIds = $CreditCard->getProductIds();
// print_r($productIds);


// if (isset($_GET['product_id'])) {
  
//               $product_id = $_GET['product_id'];
//               CreditCard::addProductId($product_id);
//               // header("Location: CreditCard.php");
//               //print_r($CreditCard->getProductIds());

//                print_r(CreditCard::getProductIds());
//                echo "<br>";
//             }else{
//               echo "id not set";
//             }

 ?>