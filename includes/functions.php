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
    $sql = "SELECT * FROM members WHERE username = '$user' AND password = '$password'";
    $result = mysql_query($sql) or die('Query failed. '.mysql_error());

    //if there is a match...
    if (mysql_num_rows($result) == 1) {
        //set the session
        $_SESSION['authorized'] = true;

        //direct to admin
        header('Location: '.DIRADMIN);
        exit();
    } else {
        //define error message if fail
        $_SESSION['error'] = 'Sorry, wrong username or password';
    }
}

//returns true/false depending on whether user logged in ----------
function logged_in() {

}

//checks if logged in --> if not, redirects to login page ---------
function login_required() {

}

//logs user out ---------------------------------------------------
function logout() {

}

//shows any notifications -----------------------------------------
function messages() {

}

//shows any errors ------------------------------------------------
function errors() {

}

?>