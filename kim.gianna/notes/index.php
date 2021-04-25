<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landing Page</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>


	<div class="container">
		
			<div class="view-window" style="background-image: url('img/main.jpg');">
					<div class="title-center">Scents inspired by Seoul, a dynamic city</div>
			</div>
		
		
			<div class="col-xs-12 col-md-3">
				<figure class="figure product newItem">
					<h1>New Product</h1>
				</figure>

				
				<?php 

				include_once "../lib/php/functions.php";
				include_once "../parts/templates.php";
				$result = makeQuery(
				 	makeConn(),
					"
					SELECT *
					FROM `products`
					ORDER BY `date_create` DESC
					LIMIT 3
					"
				);

				echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

				?>
			</div>	
			

			
		
	</div>






</body>
</html>