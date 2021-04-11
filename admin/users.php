
<?php


include "../lib/php/functions.php";



//$notes_object = file_get_json("notes.json");
$users = file_get_json("../data/users.json");

//print_p($notes);

function showUserPage($user) {

$classes = implode(",", $user->classes);


//heredoc
echo <<<HTML

<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
	
</nav>

<form>
	<div class="form-control">
		<label class="form-label">User Name</label>
		<input type="text" value="$user->name" placeholder="Full Name" class="form-input">
	</div>

	<div class="form-control">
		<label class="form-label">Type</label>
		<input type="text" value="$user->type" placeholder="Type" class="form-input">
	</div>

	<div class="form-control">
		<label class="form-label">Email</label>
		<input type="text" value="$user->email" placeholder="Email" class="form-input">
	</div>

	<div class="form-control">
		<label class="form-label">Classes</label>
		<input type="text" value="$classes" placeholder="Classes" class="form-input">
	</div>

	<div class="form-control">
        <input class="form-button" type="submit" value="Submit">
    </div>
</form>




HTML;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Admin Page</title>
    
    <?php include "../parts/meta.php"; ?>
</head>

<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="container">

		<div class="card soft">

			<?php

			if(isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
			} else {

			?>
			<h2>User List</h2>

			<nav class="nav">
				<ul>
			<?php

			for($i=0;$i<count($users);$i++){
				echo "<li>
					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
				</li>";
			}

			?>

				</ul>
			</nav>

			<?php } ?>

		</div>
	</div>
	

	
</body>
</html>