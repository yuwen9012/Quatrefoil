<?php
header('Content-Type: application/json');

include("connect.php");
$response= array();
$select_db= mysqli_select_db($db_link, "quatrefoil");

if(!$select_db) {
    $response['state']= false;
    $select_db->close();
} else {
	$query = json_decode(file_get_contents("php://input"), true);

    if (isset($query['id']) && !is_null($query['id'])){
    	$sql_query= $db_link->prepare('SELECT * FROM product_info WHERE id=?');
    	$sql_query->bind_param('i', $query['id']);
    	$sql_query->execute();

    	$result= $sql_query->get_result();

    	if($result-> num_rows>0){
    		$product_info= $result->fetch_assoc();

    		$response['state']= true;
    		$response['product_info']= $product_info;
    	} else {
    		$response['state']= false;
    	}
    	$sql_query->close();
    } else{
    	$response['state']= false;
    }
}

echo json_encode($response);
?>