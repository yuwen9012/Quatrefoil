<?php

include("connect.php");

session_start();
$response=array();
$select_db= mysqli_select_db($db_link, "quatrefoil");

if(!$select_db) {
	$response= "發生錯誤，請稍後再試(database error)";
} else {
	$email= $_SESSION['email'];
	$oldpwd= $_POST['oldpwd'];
	$newpwd= $_POST['newpwd'];

	if (isset($email) && isset($oldpwd) && isset($newpwd)){
		$sql_query= $db_link->prepare("SELECT * FROM users WHERE email=? AND userpwd=?");
		$sql_query->bind_param("ss", $email, $oldpwd);
		$sql_query->execute();

		$result= $sql_query->get_result();

		if($result-> num_rows>0){
			$sql_query->close();
		
			$sql_update= $db_link->prepare("UPDATE users SET userpwd=? WHERE email=?");
			$sql_update->bind_param("ss", $newpwd, $email);

			if ($sql_update->execute()) {
    	    	$response = "密碼修改成功";
   			} else {
        		$response = "發生錯誤，請稍後再試(update error)";
    		}
    		$sql_update->close();
		} else{
			$response = "舊密碼錯誤";
			$sql_query->close();
		}
		
	} else {
		$response = "發生錯誤，請稍後再試(null data)";
	}
}	

header('Content-Type: application/json');
echo json_encode($response);
?>