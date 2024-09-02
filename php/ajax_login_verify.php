<?php

include("connect.php");

session_start();
$response= array();

$select_db= mysqli_select_db($db_link, "quatrefoil");
if(!$select_db) {
	$response['state']= False;
	$response['msg']= "發生錯誤，請稍後再試";
}else{
	$email= $_POST['email'];
	$userpwd= $_POST['userpwd'];

	$sql_query= $db_link->prepare("SELECT id, email, premium FROM users WHERE email= ? AND userpwd= ?");
	$sql_query->bind_param("ss", $email, $userpwd);
	$sql_query->execute();

	$result = $sql_query->get_result();

	if ($result-> num_rows >0) {
		
		$data = $result->fetch_assoc();

		$_SESSION['loggedin'] = true;
		$_SESSION['id']= $data['id'];
        $_SESSION['email'] = $email;
        $_SESSION['premium'] = $data['premium'];
		$response['state']= True;
	}else{
		$response['state']= False;
		$response['msg']= "帳號或密碼錯誤";
	}
	$sql_query->close();
}

header('Content-Type: application/json');
echo json_encode($response);
?>
