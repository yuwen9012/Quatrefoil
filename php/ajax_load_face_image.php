<?php

session_start();
$response= array();
$response['state']= False;

if (isset($_SESSION['experiment_img'])){
	$response['state']= True;
    $response['experiment_img']= $_SESSION['experiment_img'];
}

header('Content-Type: application/json');
echo json_encode($response);
?>