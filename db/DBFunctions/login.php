<?php
function login($username, $password){
        //from dbconnection.php
	//include "index.php";
        $stmt = getDB()->prepare("SELECT * FROM Users where username = :username LIMIT 1");
        //$stmt->execute([":username"=>$username]);
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $params = array(":username"=>$username); // ":password"=>$hash);
        $result = $stmt->execute($params);
        $e = $stmt->errorInfo();
        if($e[0] != "00000"){
            echo "uh oh something went wrong: " . var_export($e, true);
        }
	//var_dump($stmt->errorInfo());
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //TODO do proper checking, maybe user doesn't exist
        if($result){
                if(password_verify($password, $result["password"])){
                        unset($result["password"]); //never return password, there's no need to
 			$arr = array("status"=>200, "data"=>$result, "message" =>"This is login confirmation"); //send user data back so app can use it
  			return header("Location: http://3.239.37.41/app/index.php%22);
  			//  exit;

		}
                else{
                        //must return proepr message blah blah blah see below
                        return array("status"=>403, "message"=>"Eh what's up doc?");
                }
        }
        else{
                //must return a proper message so that the app can parse it
                //and display a user friendly message to the user
                return array("status"=>400, "message"=>"do something");
        }
// header("Loaction: index.php");
}
?>
