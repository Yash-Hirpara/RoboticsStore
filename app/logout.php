<?php
//starts/loads a session, basically tells php to do its magic
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout Page</title>
    <style>
        body {
            background-color: linen;
        }
    </style>

</head>
<body>
    <div class="container" style="text-align: center;">
       <button><br><br><h1><a href="index.php">Home</a><hr></h1></button>
    </div>
    <h2 style="text-align: center;">You have successfully logged out!</h2>
    <h3 style="text-align: center;">Please click on Home to go to the Robo Shop website!</h3>
</body>
</html>
