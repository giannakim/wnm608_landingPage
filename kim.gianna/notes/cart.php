<?php 

include_once "../lib/php/functions.php";

include_once "../parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");





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

	<div class="container">
		<h2>CART</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-6">
				<div class="card soft">
					<?= array_reduce($cart,'cartListTemplate') ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-5">
				<div card medium>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>

					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>

					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;7.00</div>
					</div>

					<div class="card-section">
						<a href="notes/product_checkout.php" class="form-button-etc">Checkout</a>
					</div>
	
				</div>


			</div>

		</div>
		
	</div>


</body>
</html>