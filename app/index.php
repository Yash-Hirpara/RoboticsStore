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
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
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
                                <img src="https://www.cnet.com/a/img/3Mz70ppadlK1VwwC0360aDCR188=/940x0/2018/03/15/c2a89685-9f7a-4946-8afb-f2f764177e3b/pepperpizzahut.jpg" alt="Robots" class="center" width="500" height="333">
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
                               <img src="https://media.sketchfab.com/models/b0bd0ba3191845b58753c00b9233b180/thumbnails/7f54d37567f94c2a85abb28a78f44401/bfe630e6c87044a3933940a701f6b95e.jpeg" alt="Parts" class="center" width="500" height="333">
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
                               <img src="https://www.eletimes.com/wp-content/uploads/2019/12/Robotics-industrial.jpg" alt="Machines" class="center" width="500" height="333">
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
