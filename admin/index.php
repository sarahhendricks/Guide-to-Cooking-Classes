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