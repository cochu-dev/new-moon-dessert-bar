<?php 
include 'connection.php';
$conn = connectMysql();
session_start();

$buy_id = $_GET['id'];
$mycar = $_SESSION['mycar'];

foreach ($mycar as $product) {
	if($product['buy_id'] == $buy_id){
		unset($mycar[$buy_id]);
	}
}

$_SESSION['mycar'] = $mycar;

header('location: ../shopping/cart.php');
?>
