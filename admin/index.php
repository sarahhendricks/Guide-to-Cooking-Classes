<?php 
	require '../includes/config.php';
	
	//login_required();
	
	if(isset($_GET['logout'])){
		logout();
	}
	
	//check if a page has been deleted
	if(isset($_GET['delpage'])) {
		$delpage = $_GET['delpage'];
		$delpage = mysql_real_escape_string($delpage);
		$sql = mysql_query("DELETE FROM pages WHERE pageID = '$delpage'");
		$_SESSION['success'] = "Page deleted";
		header('Location: '.DIRADMIN);
		exit();
	}
?>

<!-- begin admin homepage -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
	<title><?php echo SITETITLE;?></title>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script></script>
</head>

<body>
	
</body>
</html>