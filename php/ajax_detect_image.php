<?php

$response= array();
$response['state']=False;
$response['msg']='';

include("connect.php");

$select_db= mysqli_select_db($db_link, "quatrefoil");
if(!$select_db) {
	$response['msg']= "發生錯誤，請稍後再試";
}else{

	$image= $_FILES['photo'];
	$hair_dying= $_POST['hair_dying'];
	$lenses= $_POST['lenses'];
	$gender= $_POST['gender'];

	$image_name= uniqid('', true) . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);

	$imageDir= '../images/upload/';
	$outputDir= '../images/output/';
    if (!is_dir($imageDir)) { mkdir($imageDir, 0777, true); }
    if (!is_dir($outputDir)) { mkdir($outputDir, 0777, true); }

	$uploadFile= $imageDir . $image_name;
	$outputFile= $outputDir . $image_name;

    if (move_uploaded_file($image['tmp_name'], $uploadFile)) {

    	$result= judging_type($uploadFile, $outputFile);

    	if ($result->state==0){
    		$message= $result->message;

    		if($message=='spring' || $message=='summer' || $message=='autumn' || $message=='winter'){
                $sql_insert_state= insert_data($image_name, $gender, $hair_dying, $lenses, $message);
                if ($sql_insert_state){
                	$response['state']= True;
                	$response['msg']= $message;
                	
                    session_start();
                    $_SESSION['season']= $message;
                    $_SESSION['experiment_img']= $image_name;
                } else{
                	$response['msg']= '發生錯誤，請稍後再試';
                }
    		
    		} elseif ($message=='imgerr01') {
    			$response['msg']= '偵測出多個人臉，請更換照片後再次嘗試';
    		} elseif ($message=='imgerr02'){
                $response['msg']= '無法偵測圖片，請更換照片後再次嘗試';
    		} elseif ($message=='imgerr03'){
                $response['msg']= '無法偵測圖片，請更換照片後再次嘗試';
			} elseif ($message=='pyerr01'){
                $response['msg']= '發生錯誤，請稍後再試(Error 1)';
    		} elseif ($message=='pyerr02') {
    			$response['msg']= '發生錯誤，請稍後再試(Error 2)';
    	    } else{
    		    $response['msg']= '發生錯誤，請稍後再試(Error 3)';
    	    }

        } else {
            $response['msg']='發生錯誤，請稍後再試(Error xx6)';
        }
    } else{
    	$response['msg']='發生錯誤，請稍後再試(Error xx7)';
    }

}

function insert_data($image_name, $gender, $hair_dying, $lenses, $season){
	try{
		global $db_link;
		$sql_insert= $db_link->prepare("INSERT INTO season_test (image_name, gender, hair_dying, lenses, type) VALUES (?, ?, ?, ?, ?)");
    	$sql_insert->bind_param("sssss", $image_name, $gender, $hair_dying, $lenses, $season);

    	if ($sql_insert->execute()) {
    		return True;
   		}
   		return False;

	} catch (Exception $e){
		return False;
	}
}

function judging_type($image_path, $output_path){
    $result= new stdClass();
    
    try{
	    $pyexe= "C:/Users/liang/Downloads/python/python.exe";
	    $pythonScript = 'face_detect/face_detect.py';

	    $command = escapeshellcmd(escapeshellarg($pyexe) . " " . 
		    escapeshellarg($pythonScript) . " " . 
		    escapeshellarg($image_path) . " " . 
		    escapeshellarg($output_path) . " " . "2>/dev/null");

	    // $outputs = exec($command . ' 2>&1', $result, $state);
	    $outputs = exec($command, $message, $state);

	    $result->message= implode('', $message);
	    $result->state= $state;
	} catch (Exception $e){
		$result->state= 1001;
	}
	return $result;
}

header('Content-Type: application/json');
echo json_encode($response);
?>