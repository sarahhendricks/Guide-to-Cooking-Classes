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
		<a href="">
			<div id="jumbo">
				<!-- photo - links to something? -->
			</div>
		</a>
		<div id="welcome">
			<!-- Some paragraphs about what the project is -->
		</div>
		<div id="classes">
			<!-- 	php here for adding individual places.
					This needs to be able to update when the admin
					adds new places to take classes -->
		</div>

		<?php
			include_once('_class/simpleCMS.php');
			$obj = new simpleCMS();
			$obj->host = 'localhost';
			$obj->username = 'root';
			$obj->password = 'root';
			$obj->table = 'DB1234567';
			$obj->connect();


			if ($_POST)
				$obj->write($_POST);

			echo ($_GET['admin'] == 1) ? $obj->display_admin() : $obj->display_public();
		?>

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