<?php 
	require '../includes/config.php';
	
	//login_required();
	
	if(isset($_GET['logout'])){
		logout();
	}
	
?>