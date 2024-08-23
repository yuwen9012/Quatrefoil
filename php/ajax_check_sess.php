<?php

session_start();
$response= array();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $response['loggedin']= true;
    $response['id']= $_SESSION['id'];
    $response['email']= $_SESSION['email'];
    $response['premium']= $_SESSION['premium'];
} else {
    $response['loggedin']= false;
}

// header('Content-Type: application/json');
echo json_encode($response);
?>