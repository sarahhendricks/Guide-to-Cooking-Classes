<?php 
/* ________________________________________________________________________________
 * This php code is a modified version of a tutorial written by jamesismyname. His 
 * work can be found at https://github.com/daveismyname/simple-cms
 *
 * Author: Sarah Hendricks
 * ________________________________________________________________________________
*/
    require('../includes/config.php');

    if(isset($_POST['submit'])) {
        $title = $_POST['pageTitle'];
        $content = $_POST['pageCont'];

        $title = mysql_real_escape_string($title);
        $content = mysql_real_escape_string($content);

        mysql_query("INSERT INTO pages (pageTitle, pageCont) VALUES ('$title','$content')") or die(mysql_error());
        $_SESSION['success'] = 'Page added.';
        header('Location: ' .DIRADMIN);
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
            <p>Title: </p><br>
            <input name="pageTitle" id="pageTitle" value="" type="text" size="103" />
            <p>Photo Link: </p>
            <input name="photo" id="photo" value="" type="file" size="50" />
            <p>Content: </p><br>
            <textarea name="pageCont" id="pageCont" cols="100" rows="20"></textarea>
            <p><input type="submit" name="submit" id="submit" value="Submit"></p>
        </form>
    </div>
    
</body>
</html>