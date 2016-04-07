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
	<script type="text/javascript">
		//create popup to deal with wanting to delete page
		function delpage(id, title) {
			if (confirm("Are you sure you want to delete '"+title+"'?")) {
				window.location.href='<?php echo DIRADMIN;?>?delpage='+id;
			}
		}
	</script>
</head>

<body>
	<h1>Admin Homepage</h1>
	<nav>
		<ul>
			<li><a href="<?php echo DIRADMIN;?>">Admin Homepage</a></li>
			<li><a href="<?php echo DIR;?>" target="_blank">View Website</a></li>
			<li><a href="<?php ?>">Logout</a></li>
		</ul>
	</nav>

	<div class="pages">
		<table>
			<tr>
				<th>Title</th>
				<th>Action</th>
			</tr>
			<?php
				//get the classes by id
				$sql = mysql_query("SELECt * FROM pages ORDER BY pageID");
				while($row = mysql_fetch_object($sql)) {
					echo "<tr>";
						echo "<td>$row->pageTitle</td>";
						if ($row->pageID == 1) {
							//id of homepage, don't include delete link
							echo "<td><a href=\"\">Edit</a></td>";
						} else {
							//otherwise, inlcude delete button
							//FIX LINKS
							echo "<td><a href=\"\">Edit</a> | <a href=\"\" onclick=\"javascript:delpage('$row->pageID','$row->pageTitle');\">Delete</a></td>";
						}
						
					echo "</tr>";
				}
			?>
		</table>

		<!-- link to create new pages -->
		<p><a href="" class="button">Add Page</a></p>
	</div>
	
</body>
</html>