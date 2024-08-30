<?php

$host= "localhost";
$username= "root";
$password= "helen61126";

$db_link= mysqli_connect($host, $username, $password);

if(!$db_link){

    $response = array(
        "state" => false,
        "msg" => "發生錯誤，請稍後再試(Error xxx)"
    );

    echo json_encode($response);
	die();
}

mysqli_query($db_link, "SET NAMES 'utf8'");
?>