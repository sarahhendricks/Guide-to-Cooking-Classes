<?php
	session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title>Guide to DC Cooking Classes</title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script></script>
</head>
<body>
	<header>
		<div id="Logo">
		</div>
		<nav>
			<div id="general-nav">
				<ul>
					<div id="float-left">
						<li><a href="index.php">Home</a></li>
						<!-- Make text bigger -->
					</div>
					<div id="float-right">
						<li><a href="help.php">About</a></li>
						<li id="sign-in"><a href="signin.php">Sign In</a></li>
					</div>
				</ul>
			</div>
		</nav>
	</header>

	<div id="content">
		
		<div class="form-box">
			<h1>Log In</h1>
			<form action="" method="post" onsubmit="return checkLoginFields(this)">
				<input type="text" placeholder="Username" name="username" id="username" /><br />
				<input type="password" placeholder="Password" name="password" id="passowrd" /><br />
				<input type="submit" value="Submit" name="submit" id="submit" />
			</form>
			<span><?php echo $error; ?></span>
		</div>

	</div>

	<footer>
		<ul>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="">Follow</a></li>
		</ul>
	</footer>
</body>

</html>