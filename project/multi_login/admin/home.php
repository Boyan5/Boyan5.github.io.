<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	
	<div class="navbar">
		<ul class="list">
			<li><a class="menu" href="ReviewShoes.php">Shoes reviews</a></li>
			<li><a class="menu" href="ReviewShirt.php">Shirt reviews</a></li>
			<li><a class="menu" href="ReviewSocks.php">Socks reviews</a></li>
			<li><a class="menu" href="ReviewGloves.php">Gloves reviews</a></li>
			<li><a class="menu" href="ReviewBall.php">Ball reviews</a></li>
		</ul>
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<div class="profile_info">
			<img src="../images/admin_profile.png" width="100px" height="100px">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
	
	<footer class="footer">
		<p class="p">THE FOOTBALL SHOP</p>
	</footer>
</body>
</html>