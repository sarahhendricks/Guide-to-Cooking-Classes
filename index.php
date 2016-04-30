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
	<script src="https://use.typekit.net/ahi7zjt.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
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
						<li class="sign-in"><a href="admin/login.php">Sign In</a></li>
					</div>
				</ul>
			</nav>

			<div class="title">
				<h1>Your guide to</h1><div class="script">Cooking Classes</div><h1>in DC</h1>
			</div>
		</div>
	</header>
	<div class="content">
		<div class="welcome">
			<p>Ever wanted to learn to cook something delicious, but didn't know where to begin? Or have you been struggling to cut an onion since you can remember, and want to learn how to do it properly? Here in Washington D.C., we have plenty of places for you to learn new cooking techniques. Let real chefs teach you in one of these establishments, and you'll be on your way to being Julia Child in no time.</p>
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
				        print "<div class=\"class\"><img src=\"".$row['photo']."\" /><div class=\"classText\"><h4>".$row['pageTitle']."</h4>".$row['pageCont']."<p><a href=\"".$row['pageLink']."\" target=\"_blank\">More info</a></p><p class=\"photoCredit\">Photo by: ".$row['photoCredit']."</p></div></div>"; 
				    }
				}
			    mysql_free_result($result);
		    ?>	
		</div>
		<div class="overlay" onClick="style.pointerEvents='none'"></div>
		<iframe src="https://www.google.com/maps/d/u/1/embed?mid=zN4xwvTNZMW4.kYPEf1FWXYEM" width="100%" height="480"></iframe>

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