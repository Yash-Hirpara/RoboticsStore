<?php
    session_start();
    //require 'connection.php';
    //if(!isset($_SESSION['email'])){
    //    header('location: login.php');
    //}
?>
<!DOCTYPE html>
<html>
<h1>Shopping Cart</h1>
<body class="body">
    <div class="container cart-page">
      <table>
          <tr>
              <th>Product</th>
              <th>Quantity</th>
             <th>Subtotal</th>
          </tr>
      <tr>
        <td>
            <div class="cart-info">
                <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/2E3A/production/_104643811_050821715-1.jpg" width="100" height="100">
                <div>
                    <p>Serving Robot for Restaurants</p>
                    <small>Price: $7,999.99</small>
                    <a href="">Remove</a>
                </div>
            </div>

        </td>
        <td><input type="number" value="1"></td>
        <td>$7,999.99</td>
      </tr>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="https://www.robotshop.com/media/catalog/product/cache/image/1350x/9df78eab33525d08d6e5fb8d27136e95/j/s/jsumo-atlas-all-terrain-high-speed-robot-4x4-mechanical-kit-w-o-electronics.jpg" width="100" height="100">
                    <div>
                        <p>JSumo ATLAS All Terrain High Speed Robot 4x4</p>
                        <small>Price: $349.99</small>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>$349.99</td>
        </tr>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="https://levelfivesupplies.com/wp-content/uploads/2020/10/viperx-300-6-dof-robot-arm-1.jpg" width="100" height="100">
                    <div>
                        <p>JViperX 300 Robot Arm</p>
                        <small>Price: $4,499.99</small>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
          <td><input type="number" value="1"></td>
          <td>$4,499.99</td>
        </tr>
      </table>

      <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$12,849.97</td>
            </tr>
            <tr>
                <td>Tax(7%)</td>
                <td>$899.50</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>$00.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$13,749.48</td>
            </tr>

        </table>
      </div>
      <button class="checkout" onclick="alert('Thank you for shopping! We will send you a Shipping Confirmation email when your item ship. You card will not charged until your package ships.')">Checkout</button>
      <br><br><br><br>

      <footer class="footer" style="text-align: center;">
        <div class="container">
          <p>Copyright &copy Robo Shop. All Rights Reserved. | Contact Us: +1732 323 2323</p>
          <p>This website is developed by Robo Shop Team</p>
        </div>
      </footer>

</body>
</html>

<head>
  <title>Cart</title>
  <style>
      .body {
        background: linen;
      }
      .cart-page {
        margin: auto;
      }
      table {
        width: 100%;
        border-collapse: collapse;
      }
      .cart-info {
        display: flex;
        flex-wrap: wrap;
      }
      th{
        text-align: left;
        padding: 5px;
        background: #333;
        color: white;
        font-weight: normal;
      }
      td {
        padding: 10px 5px;
      }
      td input{
        width: 40px;
        height: 30px;
        padding: 5px;
      }

      td a{
        color: red;
        font-size: 12px;
      }
      td image {
        width: 80px;
        height: 80px;
        margin-right: 10px:
      }
      .total-price{
        display: flex;
        justify-content: flex-end;
      }
      .total-price table{
        border-top: 3px solid red;
        width: 100%;
        max-width: 570px;
      }
      /**td:last-child{
        text-align: right;
      }
      .cart-info p{
        display:none;
      }**/

      .checkout {
        background-color: #4da6ff;
        color: white;
        padding: 14px 20px;
        margin: 8px 0 0 935px;
        border: none;
        cursor: pointer;
        width: 20%;
      }


  </style>
</head>
