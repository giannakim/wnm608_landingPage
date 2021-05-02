<?php 

include_once "../lib/php/functions.php";

include_once "../parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");


$cart_items = getCartItems();


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<div class="container card medium">
		<h2>CART</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<div class="card soft">
					<?= array_reduce($cart_items,'cartListTemplate') ?>
				</div>

			</div>

			<div class="col-xs-12 col-md-5">
				<div class="card medium">
					<?= cartTotals() ?>
				</div>
			</div>

		</div>
		
	</div>


</body>
</html>