<?php

require("phpMQTT.php");
$conn = mysqli_connect("localhost","your_username","your_password","your_db");
$host = "xxxxx.cloudmqtt.com";     // server cloudmqtt
$port = 123456;                     // port cloudmqtt
$username = "username_mqtt";                   // user cloudmqtt
$password = "password_mqtt";                   // password cloudmqtt
$mqtt = new phpMQTT($host, $port, "example_1"); //web_ adalah nama client id , dapat diubah sesuai keinginan
if(!$mqtt->connect(true, NULL, $username, $password)) {
 	exit(1);
}

	$topics['sensor/'] = array("qos" => 0, "function" => "procmsg");
	$mqtt->subscribe($topics, 0);
	while($mqtt->proc()  ){
	}
	$mqtt->close();

function procmsg($topic, $msg){
	    //decode json
       $obj = json_decode($msg);
        
       $data_1=$obj->array_1;
       $data_2=$obj->array_2;
       
      //  echo "Msg Recieved: " . date("r") . "\n";
		  //  echo "Topic: {$topic}\n\n";
		  //  echo "\t$msg\n\n";
      mysqlinsert($data_1, $data_2);
}

function mysqlinsert($data_1, $data_2) {
  global $conn;
  
        $query="INSERT INTO db (data_1, data_2) VALUES  ('$data_1', '$data_2')";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        
}