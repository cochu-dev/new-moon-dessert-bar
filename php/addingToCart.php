<?php 

include 'connection.php';
$conn = connectMysql();
session_start();
$product_id = $_GET['product_id'];
$product_name = $_GET['product_name'];
$product_price = $_GET['product_price'];
$product_img = $_GET['product_img'];
$quantity = (int)$_GET['quantity'];


$mycar = $_SESSION['mycar'];


if(array_key_exists($product_id, $mycar)){
	$mycar[$product_id]['buy_num'] += $quantity;
	$mycar[$product_id]['buy_price'] += $product_price*$quantity;

} else {
	$mycar[$product_id] = array('buy_id'=>$product_id, 'buy_name'=>$product_name, 'buy_price'=>0, 'buy_img'=>$product_img, 'buy_num'=>$quantity);
	$mycar[$product_id]['buy_price'] += $product_price*$quantity;
}



$_SESSION['mycar'] = $mycar;

header('location: ../shopping/cart.php');
?>
