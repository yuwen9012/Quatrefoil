<?php

include("connect.php");

$state=0;
$select_db= mysqli_select_db($db_link, "quatrefoil");

if(!$select_db) {
	$response= "發生錯誤，請稍後再試";
	$select_db->close();
} else {
	$email= $_POST['email'];
	$userpwd= $_POST['userpwd'];

	if (isset($email) && isset($userpwd)){
		$sql_insert= $db_link->prepare("INSERT INTO users (email, userpwd) VALUES (?, ?)");
		$sql_insert->bind_param("ss", $email, $userpwd);

		if ($sql_insert->execute()) {
			$state=1; 
    	    $response = "註冊成功，請重新登入";
   		} else {
        	$response = "發生錯誤，請稍後再試";
    	}
		
	} else {
		$response = "發生錯誤，請稍後再試";
	}
	$sql_insert->close();
}

if ($state==1) {
	echo "<script type='text/javascript'>alert('$response'); location.href = '../login.php';</script>";
} elseif ($state==0) {
	echo "<script type='text/javascript'>alert('$response'); location.href = '../register.php';</script>";
}



























?>