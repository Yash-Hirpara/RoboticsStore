<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <style>
        body {
            background-color: linen;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
<h1 style="text-align: center"><i>Robo Shop</i></h1>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="slogin.php">Login</a></li>
        <li><a href="sregister.php">Registration</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <h2 style="text-align: center">Incredible Prices on All Manufacturer Parts</h2>
    <div style="text-align: center;">
        <button><a href="products.php" class="center">Shop Now</a></button>
    </div>
    <br>
    <div style="text-align: center;">
        <img src="https://www.cnet.com/a/img/3Mz70ppadlK1VwwC0360aDCR188=/940x0/2018/03/15/c2a89685-9f7a-4946-8afb-f2f764177e3b/pepperpizzahut.jpg"
             alt="Robots" class="center" width="500" height="333">
        <p id="autoResize">Robots</p>
        <p>Robots that will make your lives easier.</p>

        <img src="https://media.sketchfab.com/models/b0bd0ba3191845b58753c00b9233b180/thumbnails/7f54d37567f94c2a85abb28a78f44401/bfe630e6c87044a3933940a701f6b95e.jpeg"
             alt="Parts" class="center" width="500" height="333">
        <p id="autoResize">Robo Parts</p>
        <p>Robot parts are great way to build or modify a robot quickly.</p>

        <img src="https://www.eletimes.com/wp-content/uploads/2019/12/Robotics-industrial.jpg"
             alt="Machines" class="center" width="500" height="333">
        <p id="autoResize">Robot Machines</p>
        <p>Some of the best Robo Machines for industrial use.</p>
    </div>

    <br><br> <br><br><hr>

    <footer class="footer" style="text-align: center;">
        <div class="container">
            <p>Copyright &copy Robo Shop. All Rights Reserved. | Contact Us: +1732 323 2323</p>
            <p>This website is developed by Robo Shop Team</p>
        </div>
    </footer>
</body>
</html>
