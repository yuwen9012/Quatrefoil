<?php

session_start();
$response= array();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $response['loggedin']= true;
    $response['email']= $_SESSION['email'];
} else {
    $response['loggedin']= false;
}

header('Content-Type: application/json');
echo json_encode($response);

?>
