<?php

require_once(DIR . '/../lib/path.inc');
require_once(DIR . '/../lib/get_host_info.inc');
require_once(DIR . '/../lib/rabbitMQLib.inc');
//require(DIR."/dbconnection.php");

//separate files for DB calls so it's easier to divide work
require(DIR."/APIFunctions/getAPI.php");
//require(DIR."/APIFunctions/register.php");
//TODO add more as they're developed

function request_processor($req){
        echo "Received Request".PHP_EOL;
        echo "<pre>" . var_dump($req) . "</pre>";
        if(!isset($req['type'])){
                return "Error: unsupported message type";
        }
        //Handle message type
        $type = $req['type'];
        switch($type){
                case "login":
                        return login($req['username'], $req['password']);
                case "register":
                        return register($req["username"], $req["password"]);
                case "validate_session":
                        return validate($req['session_id']);
                case "echo":
                        return array("return_code"=>'0', "message"=>"Echo: " .$req["message"]);
        }
        return array("return_code" => '0',
                "message" => "Server received request and processed it");
}
//will probably need to update the testRabbitMQ.ini path here
$server = new rabbitMQServer("testRabbitMQ.ini", "sampleServer");

echo "Rabbit MQ Server Start" . PHP_EOL;
$server->process_requests('request_processor');
echo "Rabbit MQ Server Stop" . PHP_EOL;
exit();
?>
