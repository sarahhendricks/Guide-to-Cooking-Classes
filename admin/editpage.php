<?php 
    if (!isset($_GET['id']) || $_GET['id'] == '') {
        header('Location: '.DIRADMIN);
    }

    $id = $_GET['id'];
    $id = mysql_real_escape_string($id);
    $query = mysql_query("SELECT * FROM pages WHERE pageID='$id'");
    $row = mysql_fetch_object($q);

    if (isset($_POST['submit'])) {
        $title = $_POST['pageTitle'];
        $content = $_POST['pageCont'];

        $title = mysql_real_escape_string($title);
        $content = mysql_real_escape_string($content);

        mysql_query("UPDATE pages SET pageTitle='$title', pageCont='$content' WHERE pageID='$pageID'") or die(mysql_error());
        $_SESSION['success'] = 'Page updated.';
        //header('Location: ' .DIRADMIN);
        exit();
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
    <title><?php echo SITETITLE;?></title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>Add Page</h1>
    <nav>
        <ul>
            <li><a href="<?php echo DIRADMIN;?>">Admin Homepage</a></li>
            <li><a href="<?php echo DIR;?>" target="_blank">View Website</a></li>
            <li><a href="<?php ?>">Logout</a></li>
        </ul>
    </nav>

    <div class="add-page">
        <form action="" method="post">
            <input type="hidden" name="pageID" value="<?php echo $row->pageID;?>">
            <p>Title: </p><br>
            <input name="pageTitle" id="pageTitle" value="<?php echo $row->pageTitle; ?>" type="text" size="103">
            <p>Content</p><br>
            <textarea name="pageCont" id="pageCont" cols="100" rows="20"><?php echo $row->pageCont; ?></textarea>
            <p><input type="submit" name="submit" id="submit" value="Submit"></p>
        </form>
    </div>
    
</body>
</html>