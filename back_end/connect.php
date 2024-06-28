<?php

$host= "localhost";
$username= "root";
$password= "helen61126";

$db_link= mysqli_connect($host, $username, $password);

if(!$db_link){
	die("connect failed");
}

mysqli_query($db_link, "SET NAMES 'utf8'");
?>