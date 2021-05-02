<?php

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";	

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<div class="container">
		<div class="card medium">
			<h2>PRODUCT LIST</h2>

	
			<?php 

			
			$result = makeQuery(
			 	makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				LIMIT 12
				"
			);

			echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

			?>
		</div>

	</div>

</body>
</html>