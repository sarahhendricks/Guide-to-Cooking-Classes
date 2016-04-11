<?php 
/* ________________________________________________________________________________
 * This php code is a modified version of a tutorial written by jamesismyname. His 
 * work can be found at https://github.com/daveismyname/simple-cms
 *
 * Author: Sarah Hendricks
 * ________________________________________________________________________________
*/
	require 'includes/config.php';
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
						<li id="sign-in"><a href="admin/login.php">Sign In</a></li>
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
			<!-- 	
				while (there are still enteries in the database) {
					make a div
					put in the image, title, paragraph, link
				}
				-->
			<?php
			    $result = mysql_query("SELECT * FROM pages;");
			    //query the database & print out 
			    if (mysql_num_rows($result) == 0) {
			    	print "Sorry, we don't have any classes right now.";
			    }
			    else {
				    while ($row = mysql_fetch_array($result)) {
				        print "<div class=\"\"><img><h4>".$row['pageTitle']."</h4>".$row['pageCont']."<a></a></div>"; 
				    }
				}
			    mysql_free_result($result);
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