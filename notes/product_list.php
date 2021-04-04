<!DOCTYPE html>
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
		<div class="grid gap">
			<div class="col-xs-12 col-md-3">
				<figure class="figure product kinds" style="margin: 0 auto;">
					<h3>EAU DE PARFUM</h3>
					<p class="kinds_desc">Lyricolor’s approach to fragrance is tied to memory, travel and clarity achieved through style of perfumery using a very small number of raw materials per composition.</p>
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure product">
					
					<?php
						$id = "1";
						$price = "45.00";
						echo "<a href='product_item.php?id=$id&price=$price'><img src='https://via.placeholder.com/400x400?text=product'></a>";
						echo "<figcaption><div>Product Name</div><div>$$price</div></figcaption>";
					?>

				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure product">

					<?php
						$id = "2";
						$price = "55.00";
						echo "<a href='product_item.php?id=$id&price=$price'><img src='https://via.placeholder.com/400x400?text=product'></a>";
						echo "<figcaption><div>Product Name</div><div>$$price</div></figcaption>";
					?>

				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure product">
					
					<?php
						$id = "3";
						$price = "65.00";
						echo "<a href='product_item.php?id=$id&price=$price'><img src='https://via.placeholder.com/400x400?text=product'></a>";
						echo "<figcaption><div>Product Name</div><div>$$price</div></figcaption>";
					?>
					
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure product">
					
					<?php
						$id = "4";
						$price = "75.00";
						echo "<a href='product_item.php?id=$id&price=$price'><img src='https://via.placeholder.com/400x400?text=product'></a>";
						echo "<figcaption><div>Product Name</div><div>$$price</div></figcaption>";
					?>
					
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure product">
					
					<?php
						$id = "5";
						$price = "85.00";
						echo "<a href='product_item.php?id=$id&price=$price'><img src='https://via.placeholder.com/400x400?text=product'></a>";
						echo "<figcaption><div>Product Name</div><div>$$price</div></figcaption>";
					?>
					
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure product">
					
					<?php
						$id = "6";
						$price = "95.00";
						echo "<a href='product_item.php?id=$id&price=$price'><img src='https://via.placeholder.com/400x400?text=product'></a>";
						echo "<figcaption><div>Product Name</div><div>$$price</div></figcaption>";
					?>
					
				</figure>
			</div>

			<div class="col-xs-12 col-md-3">
				<figure class="figure product">
					
					<?php
						$id = "7";
						$price = "105.00";
						echo "<a href='product_item.php?id=$id&price=$price'><img src='https://via.placeholder.com/400x400?text=product'></a>";
						echo "<figcaption><div>Product Name</div><div>$$price</div></figcaption>";
					?>
					
				</figure>
			</div>
		</div>
	</div>


</body>
</html>