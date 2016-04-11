<?php
/* ________________________________________________________________________________
 * This php code is a modified version of a tutorial written by jamesismyname. His 
 * work can be found at https://github.com/daveismyname/simple-cms
 *
 * Author: Sarah Hendricks
 * ________________________________________________________________________________
*/
    require('../includes/config.php'); 
    if(logged_in()) {
        header('Location: '.DIRADMIN);
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo SITETITLE;?></title>
</head>
<body>
        <?php 
        if($_POST['submit']) {
            login($_POST['username'], $_POST['password']);
        }
        ?>
        <p><?php echo messages();?></p>        
        <form method="post" action="">
        <p><label>Username</label><input type="text" name="username" /></p>
        <p><label>Password</label><input type="password" name="password" /></p>
        <p><br /><input type="submit" name="submit" class="button" value="login" /></p>                       
        </form>       
</body>
</html>