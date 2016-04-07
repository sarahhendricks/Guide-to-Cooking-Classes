<?php 
    //check if user is already logged in
    //if they aren't direct them to the login screen
    require('../includes/config.php'); 
    if(logged_in()) {header('Location: '.DIRADMIN);}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" />
<head>
    <title><?php echo SITETITLE;?></title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="login-style.css" />
    <script></script>
</head>
<body>
    <form method="post" action="">
        <p><label>Username</label><input type="text" name="username" id="username"></p>
        <p><label>Password</label><input type="password" name="password" id="password"></p>
        <p><br><input type="submit" name="submit" class="submit-button" value="login"></p>
    </form>
</body>
</html>