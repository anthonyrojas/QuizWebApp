<?php if(isset($_SESSION['user'])):?>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="dashboard.php">Dashboard</a></li>
		</ul>
	</nav>
<?php else: ?>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
		</ul>
	</nav>
<?php endif; ?>