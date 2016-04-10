<?php 
//check if this file has been included
//otherwise, throw error --> check if constant 'included' has been defined
//  this happens in the config file

if (!defined('included')) {
    die('You cannot access this file directly!');
}

//all of these functions will be used by the CMS

//logs user in ---------------------------------------------------
function login($username, $password) {
    //sanitize variables
    $username = stripslashes(mysql_real_escape_string($username));
    $password = stripslashes(mysql_real_escape_string($password));

    //encrypt the password - currently using MD5, not considered "safe" but may be good enough for this project
    $password = md5($password);

    //check if user is in database
    $sql = "SELECT * FROM members WHERE username = '$username' AND password = '$password'";
    $result = mysql_query($sql) or die('Query failed. '.mysql_error());

    //if there is a match...
    if (mysql_num_rows($result) == 1) {
        echo "There is a match.";
        //set the session
        $_SESSION['authorized'] = true;
        echo "session set to authorized";
        //direct to admin
        echo "redirecting to homepage";
        header('Location: '.DIRADMIN);
        echo "just redirected";
        exit();
    } else {
        //define error message if fail
        $_SESSION['error'] = 'Sorry, wrong username or password';
    }
}

//returns true/false depending on whether user logged in ----------
function logged_in() {
    if($_SESSION['authorized'] == true) {
        return true;
    } else {
        return false;
    }

}

//checks if logged in --> if not, redirects to login page ---------
function login_required() {
    if(logged_in()) {
        return true;
    } else {
        header('Location: '.DIRADMIN.'login.php');
        exit();
    }

}

//logs user out ---------------------------------------------------
function logout() {
    //unset the session & redirect user to login page
    unset($_SESSION['authorized']);
    echo "you have been logged out";
    header('Location: '.DIRADMIN.'login.php');
    exit();
}

//shows any notifications -----------------------------------------
function messages() {
    $message = '';
    //if the message arrays aren't empty, show them in the divs
    if($_SESSION['success'] != '') {
        $message = '<div class="msg-ok">'.$_SESSION['success'].'</div>';
        $_SESSION['success'] = '';
    }
    if($_SESSION['error'] != '') {
        $message = '<div class="msg-error">'.$_SESSION['error'].'</div>';
        $_SESSION['error'] = '';
    }
    echo "$message";
}

//shows any errors ------------------------------------------------
function errors() {
    if(!empty($error)) {
        for($i = 0; $i < count($error); $i++) {
            $showError .= '<div class="msg-error">'.$error[i].'</div';
        }
        echo $showError;
    }
}

?>