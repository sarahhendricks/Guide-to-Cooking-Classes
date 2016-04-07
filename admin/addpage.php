<?php require('../includes/config.php'); 

if(isset($_POST['submit'])){

    $title = $_POST['pageTitle'];
    $content = $_POST['pageCont'];
    
    $title = mysql_real_escape_string($title);
    $content = mysql_real_escape_string($content);
    
    mysql_query("INSERT INTO pages (pageTitle,pageCont) VALUES ('$title','$content')")or die(mysql_error());
    $_SESSION['success'] = 'Page Added';
    header('Location: '.DIRADMIN);
    exit();

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITETITLE;?></title>
<link href="<?php echo DIR;?>style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">

<div id="logo"><a href="<?php echo DIR;?>"><img src="images/logo.png" alt="<?php echo SITETITLE;?>" title="<?php echo SITETITLE;?>" border="0" /></a></div><!-- close logo -->

<!-- NAV -->
<div id="navigation">
<ul class="menu">
<li><a href="<?php echo DIRADMIN;?>">Admin</a></li>
<li><a href="<?php echo DIRADMIN;?>?logout">Logout</a></li>
<li><a href="<?php echo DIR;?>" target="_blank">View Website</a></li>
</ul>
</div>
<!-- END NAV -->

<div id="content">

<h1>Add Page</h1>

<form action="" method="post">
<p>Title:<br /> <input name="pageTitle" type="text" value="" size="103" /></p>
<p>content<br /><textarea name="pageCont" cols="100" rows="20"></textarea></p>
<p><input type="submit" name="submit" value="Submit" class="button" /></p>
</form>

</div>

<div id="footer">    
        <div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>
</pre>

<p>admin/editpage.php</p>
<pre lang="php">
<?php require('../includes/config.php'); 

if(!isset($_GET['id']) || $_GET['id'] == ''){ //if no id is passed to this page take user back to previous page
    header('Location: '.DIRADMIN); 
}

if(isset($_POST['submit'])){

    $title = $_POST['pageTitle'];
    $content = $_POST['pageCont'];
    $pageID = $_POST['pageID'];
    
    $title = mysql_real_escape_string($title);
    $content = mysql_real_escape_string($content);
    
    mysql_query("UPDATE pages SET pageTitle='$title', pageCont='$content' WHERE pageID='$pageID'");
    $_SESSION['success'] = 'Page Updated';
    header('Location: '.DIRADMIN);
    exit();

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITETITLE;?></title>
<link href="<?php echo DIR;?>style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">

<div id="logo"><a href="<?php echo DIR;?>"><img src="images/logo.png" alt="<?php echo SITETITLE;?>" title="<?php echo SITETITLE;?>" border="0" /></a></div><!-- close logo -->

<!-- NAV -->
<div id="navigation">
<ul class="menu">
<li><a href="<?php echo DIRADMIN;?>">Admin</a></li>
<li><a href="<?php echo DIRADMIN;?>?logout">Logout</a></li>
<li><a href="<?php echo DIR;?>" target="_blank">View Website</a></li>
</ul>
</div>
<!-- END NAV -->

<div id="content">

<h1>Edit Page</h1>

<?php
$id = $_GET['id'];
$id = mysql_real_escape_string($id);
$q = mysql_query("SELECT * FROM pages WHERE pageID='$id'");
$row = mysql_fetch_object($q);
?>


<form action="" method="post">
<input type="hidden" name="pageID" value="<?php echo $row->pageID;?>" />
<p>Title:<br /> <input name="pageTitle" type="text" value="<?php echo $row->pageTitle;?>" size="103" />
</p>
<p>content<br /><textarea name="pageCont" cols="100" rows="20"><?php echo $row->pageCont;?></textarea>
</p>
<p><input type="submit" name="submit" value="Submit" class="button" /></p>
</form>

</div>

<div id="footer">    
        <div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>
</pre>

<p>index.php</p>
<pre lang="php">
<?php require('includes/config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITETITLE;?></title>
<link href="<?php echo DIR;?>style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">

    <div id="logo"><a href="<?php echo DIR;?>"><img src="images/logo.png" alt="<?php echo SITETITLE;?>" title="<?php echo SITETITLE;?>" border="0" /></a></div><!-- close logo -->
    
    <!-- NAV -->
    <div id="navigation">
    <ul class="menu">
    <li><a href="<?php echo DIR;?>">Home</a></li>
    <?php
        //get the rest of the pages
        $sql = mysql_query("SELECT * FROM pages WHERE isRoot='1' ORDER BY pageID");
        while ($row = mysql_fetch_object($sql))
        {
            echo "<li><a href="".DIR."?p=$row->pageID">$row->pageTitle</a></li>"; 
        }
    ?>
    </ul>
    </div>
    <!-- END NAV -->
    
    <div id="content">
    
    <?php    
    //if no page clicked on load home page default to it of 1
    if(!isset($_GET['p'])){
        $q = mysql_query("SELECT * FROM pages WHERE pageID='1'");
    } else { //load requested page based on the id
        $id = $_GET['p']; //get the requested id
        $id = mysql_real_escape_string($id); //make it safe for database use
        $q = mysql_query("SELECT * FROM pages WHERE pageID='$id'");
    }
    
    //get page data from database and create an object
    $r = mysql_fetch_object($q);
    
    //print the pages content
    echo "<h1>$r->pageTitle</h2>";
    echo $r->pageCont;
    ?>
    
    </div><!-- close content div -->

    <div id="footer">    
            <div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
    </div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>