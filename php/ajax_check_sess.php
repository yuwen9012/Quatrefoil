<?php

session_start();
$response= array();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == True) {
    $response['loggedin']= True;
    $response['id']= $_SESSION['id'];
    $response['email']= $_SESSION['email'];
    $response['premium']= $_SESSION['premium'];
} else {
    $response['loggedin']= False;
}

if (isset($_SESSION['season_test_img'])){
    $response['season_test_img']= $_SESSION['season_test_img'];
}

header('Content-Type: application/json');
echo json_encode($response);
?>