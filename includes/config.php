<?php
//start the session
ob_start();
session_start();

//echo "start session";

//db properties
define('DBHOST', 'localhost');
define('DBPORT', 8889);
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DBNAME', 'cooking');

//make a mysql connection to the db
$conn = mysql_connect(DBHOST.':'.DBPORT, DBUSER, DBPASS) or die("Cannot make connection.");
$conn = mysql_select_db(DBNAME) or die("Can't connect to the database");

//echo "Connected to database!";


// define site path
define('DIR','http://localhost:8888/Guide%20to%20Cooking%20Classes/index.php');

// define admin site path
define('DIRADMIN','http://localhost:8888/Guide%20to%20Cooking%20Classes/admin/index.php');

// define site title for top of the browser
define('SITETITLE','Guide to Cooking Classes in DC');

//define include checker
define('included', 1);

include('functions.php');

?>