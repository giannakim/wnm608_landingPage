<?php 

include_once "../lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<div class="container">
		<div class="card medium">
			<h2>You added <?= $product->name ?> to your cart</h2>
			<div class="display-flex">
				<div class="flex-none"><a href="notes/product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="notes/cart.php">Go To Cart</a></div>
			</div>
		</div>
	</div>




</body>
</html>