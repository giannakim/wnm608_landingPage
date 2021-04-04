<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<meta name="viewport" content="width=device-width">

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<div class="container" style="margin-top: 70px;">
		<div class="" style="float: left; margin: 0 35px 0 20%;">
			<img src="https://via.placeholder.com/400x400?text=product" style="height: 32em;">
		</div>

		<div class="" style="">

			<?php
				$id = $_GET['id'];
				$price = $_GET['price'];
				if($id==1){
					echo "<h2>Product Number $id</h2>";
					echo "<p>Description: This is description $id</p>";
					echo "<div class='form-control'><button type='button' class='form-button'>Add to Cart - $$price</button></div>";
				} 
				elseif($id==2){
					echo "<h2>Product Number $id</h2>";
					echo "<p>Description: This is description $id</p>";
					echo "<div class='form-control'><button type='button' class='form-button'>Add to Cart - $$price</button></div>";
				}
				elseif($id==3){
					echo "<h2>Product Number $id</h2>";
					echo "<p>Description: This is description $id</p>";
					echo "<div class='form-control'><button type='button' class='form-button'>Add to Cart - $$price</button></div>";
				}
				elseif($id==4){
					echo "<h2>Product Number $id</h2>";
					echo "<p>Description: This is description $id</p>";
					echo "<div class='form-control'><button type='button' class='form-button'>Add to Cart - $$price</button></div>";
				}
				elseif($id==5){
					echo "<h2>Product Number $id</h2>";
					echo "<p>Description: This is description $id</p>";
					echo "<div class='form-control'><button type='button' class='form-button'>Add to Cart - $$price</button></div>";
				}
				elseif($id==6){
					echo "<h2>Product Number $id</h2>";
					echo "<p>Description: This is description $id</p>";
					echo "<div class='form-control'><button type='button' class='form-button'>Add to Cart - $$price</button></div>";
				}
				elseif($id==7){
					echo "<h2>Product Number $id</h2>";
					echo "<p>Description: This is description $id</p>";
					echo "<div class='form-control'><button type='button' class='form-button'>Add to Cart - $$price</button></div>";
				}
			?>

		</div>


	</div>




</body>
</html>