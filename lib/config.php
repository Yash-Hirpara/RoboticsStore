//<?php
//for everyone else fill in these variable strings with the connection
//details from your respective servers and delete the Heroku block above
//$dbhost = "localhost";//this should be fine for all but NJIT, which uses "sql1.njit.edu" or "sql2.njit.edu" or "sql3.njit.edu"
//$dbuser = "root";//your ucid since we follow this pattern
//$dbpass = "";//database password generated or chosen per respective steps
//$dbdatabase = "db";//your ucid since we follow this pattern

//if($conn) {
//        echo "success";
//    }
//    else {
//        die("Error". mysqli_connect_error());
//   }
//?>

<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'dbuser';
$DATABASE_PASS = '';
$DATABASE_NAME = 'db';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_error() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>
