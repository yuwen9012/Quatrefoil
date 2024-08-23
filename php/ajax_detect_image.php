<?php

include("connect.php");

$response= array();

$select_db= mysqli_select_db($db_link, "quatrefoil");
if(!$select_db) {
	$response['state']= False;
	$response['msg']= "發生錯誤，請稍後再試(db)";
}else{

	$image= $_FILES['photo'];
	$hair_dying= $_POST['hair_dying'];
	$lenses= $_POST['lenses'];
	$gender= $_POST['gender'];

	$image_name= uniqid('', true) . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
	$imageDir= '../images/upload/';
	$outputDir= '../images/output/';

	$uploadFile= $imageDir . $image_name;
	$outputFile= $outputDir . $image_name;

	if (!is_dir($imageDir)) {
        mkdir($imageDir, 0777, true);
    }

    if (!is_dir($outputDir)) {
        mkdir($outputDir, 0777, true);
    }

    if (move_uploaded_file($image['tmp_name'], $uploadFile)) {

    	$result= judging_type($uploadFile, $outputFile);

        if ($result=='error'){
        	$response['state']= False;
        	$response['msg']= 'Fail to detect image.';
        }else{
        	// $response['state'], $response['msg']= insert_data_to_sql($image_name, $gender, $hair_dying, $lenses, $result);
        	$response['state']=True;
        	$response['msg']=$result;
        }

    } else {
    	$response['state']= False;
        $response['msg']='Failed to uploaded file.';
    }
}


// function insert_data_to_sql($image_name, $gender, $hair_dying, $lenses, $season){
// 	$sql_insert= $db_link->prepare("INSERT INTO uploads (image_name, gender, hair_dying, lenses, season) VALUES (?, ?, ?, ?, ?)");
//     $sql_insert->bind_param("sssss", $targetFile, $gender, $hair_dying, $lenses, $season);

//     if ($sql_insert->execute()) {
//     	return True, $season;
//    	}
//    	return False, "Fail to upload data.";
// }

function judging_type($image_path, $output_path){
	$pyexe= "C:/Users/liang/Downloads/python/python.exe";
	$pythonScript = 'face_detect/face_detect.py';

	$command = escapeshellcmd(escapeshellarg($pyexe) . " " . 
		escapeshellarg($pythonScript) . " " . 
		escapeshellarg($image_path) . " " . 
		escapeshellarg($output_path) . " " . "2>/dev/null");

	// $outputs = exec($command . ' 2>&1', $result, $state);
	$outputs = exec($command, $result, $state);

	return $result;
}

header('Content-Type: application/json');
echo json_encode($response);
?>