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
		<div class="jumbo">
			<nav>
				<ul>
					<div class="float-left">
						<li><a href="index.php">Home</a></li>
						<!-- Make text bigger -->
					</div>
					<div class="float-right">
						<li><a href="help.php">About</a></li>
						<li class="sign-in"><a href="admin/login.php">Sign In</a></li>
					</div>
				</ul>
			</nav>

			<h1>Your guide to cooking classes in DC</h1>
		</div>
	</header>
	<div class="content">
		<div class="welcome">
			<p>Here is the welcome</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a odio dui. Aliquam et condimentum nisi. Suspendisse at neque justo. Sed semper metus ac est lobortis, sed consectetur diam iaculis. Duis leo urna, rutrum sit amet mi sed, fermentum maximus ligula. Ut a maximus nunc. Aenean fringilla in enim id tristique. Pellentesque a bibendum tortor, eu semper est.</p>
		</div>
		<div class="classes">
			<?php
			    $result = mysql_query("SELECT * FROM pages;");
			    //query the database & print out 
			    if (mysql_num_rows($result) == 0) {
			    	print "Sorry, we don't have any classes right now.";
			    }
			    else {
				    while ($row = mysql_fetch_array($result)) {
				        print "<div class=\"class\"><img src=\"".$row['photo']."\" /><div class=\"classText\"><h4>".$row['pageTitle']."</h4>".$row['pageCont']."<a></a></div></div>"; 
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