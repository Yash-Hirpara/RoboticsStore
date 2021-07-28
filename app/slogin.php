<?php
require(__DIR__."/MQPublish.inc.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {font-family: Arial, Helvetica, sans-serif; background-color: linen;}
    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid #ccc;
      box-sizing: border-box;
      background-color: #ccffcc;
    }

    button {
      background-color: #4da6ff;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 20%;
    }

    .container {
      padding: 16px;
      background-color: linen;
    }

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
  <title></title>
</head>

<body>
<h2>Login</h2>
<form method ="POST">
<div class="container">
  <label for="username"><b>Email</b></label>
  <label>
    <input type="text" placeholder="Enter Email" name="username" required>
  </label>

  <label for="password"><b>Password</b></label>
  <label>
    <input type="password" placeholder="Enter Password" name="password" required>
  </label>
    <button <input type="submit" name="submit" value="Login">Login</button>
  </div>
   </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        //TODO validate

        //calls function from MQPublish.inc.php to communicate with MQ
        $response = login($username, $password);
        if($response["status"] == 200){
		//$head = header("Location: index.php");
		$_SESSION["user"] = $response["data"];
		//$head = header("Location: index.php");
		//session_start();
		//echo "<a href='"index.php"'>link</a>";
        }
        else{
                var_export($response);
        }
}
?>
