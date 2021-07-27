<?php
function register($username, $password){
        //from dbconnection.php
        $stmt = getDB()->prepare("INSERT INTO Users(username, password) VALUES(:username, :password)");
        //$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $params = array(":username"=>$username, ":password"=>$hash);
        $result = $stmt->execute($params);
        //$result = $stmt->errorinfo();
        var_export($stmt->errorInfo());
	//TODO do proper checking, maybe user doesn't exist
        if($result)
	{
                return array("status"=>200, "message"=>"Did we register successfully?");
        }
        else
	{
                //must return a proper message so that the app can parse it
                //and display a user friendly message to the user
                return array("status"=>400, "message"=>"do something");
        }
}
?>
