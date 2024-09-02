<?php

include("connect.php");

$response= array();

$select_db= mysqli_select_db($db_link, "quatrefoil");
if(!$select_db) {
	$response['state']= False;
	$response['msg']= "發生錯誤，請稍後再試";
}else{
	$email= $_POST['email'];

	$sql_query= $db_link->prepare("SELECT * FROM users WHERE email= ?");
	$sql_query->bind_param("s", $email);
	$sql_query->execute();

	$result = $sql_query->get_result();

	if ($result-> num_rows >0) {
		$response['state']= True;
		$response['msg']= "該郵件已被註冊";
	}else{
		$response['state']= False;
		$response['msg']= "該電子郵件未被註冊";
	}
	$sql_query->close();
}

header('Content-Type: application/json');
echo json_encode($response);
?>
