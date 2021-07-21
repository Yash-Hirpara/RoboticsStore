<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
	<style>
	body {
	  	background-color: linen;
	}

	h1 {
  		color: maroon;
  		margin-left: 40px;
	}
	</style>
        <head>
	<link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Robo Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'home.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Incredible Prices on All Manufacturer Parts</h1>
                       <p></p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpg" alt="Robots">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Robots</p>
                                        <p>Robots that will make your lives easier.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpg" alt="Parts">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Robo Parts</p>
                                    <p>Robot parts are great way to build or modify a robot quickly.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpg" alt="Machines">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Robot Machines</p>
                                   <p>Some of the best Robo Machines for industrial use.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Robo Shop. All Rights Reserved. | Contact Us: +1732 323 2323</p>
                   <p>This website is developed by Robo Shop Team</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
