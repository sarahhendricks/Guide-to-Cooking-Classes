<?php 
	require 'includes/config.php';
	//echo 'files included';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title><?php echo SITETITLE;?></title>
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
					adds new places to take classes 
				while (there are still enteries in the database) {
					make a div
					put in the image, title, paragraph, link

				}
				-->
			<?php
		    $result = mysql_query("SELECT * FROM CLASSES;");

		    //query the database & print out 
		    if (mysql_num_rows($result) == 0) {
		    	print "Sorry, we don't have any classes right now.";
		    }
		    while ($row = mysql_fetch_array($result)) {
		        print "<div class="">
		        <img>
		        <h4></h4>
		        <p></p>
		        <a></a>
		        </div>";
		    }

		    mysql_free_result($result);
		    mysql_close();
		    ?>	
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