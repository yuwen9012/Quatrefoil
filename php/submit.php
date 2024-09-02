<?php
include("connect.php");

$select_db = mysqli_select_db($db_link, "quatrefoil");
if (!$select_db) {
    $response['state'] = False;
    $response['msg'] = "發生錯誤，請稍後再試";
} else {
    session_start();
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
    
    if (!isset($_SESSION['season']) || !isset($_SESSION['experiment_img'])){
        echo "<script>window.location.href = '$referer';</script>";
        die();
    }

    $season = $_SESSION['season'];
    $image_name= $_SESSION['experiment_img'];

    $winter_1 = $_POST['winter_1'];
    $summer_1 = $_POST['summer_1'];
    $autumn_1 = $_POST['autumn_1'];
    $spring_1 = $_POST['spring_1'];
    $winter_2 = $_POST['winter_2'];
    $summer_2 = $_POST['summer_2'];
    $autumn_2 = $_POST['autumn_2'];
    $spring_2 = $_POST['spring_2'];
    $winter_3 = $_POST['winter_3'];
    $summer_3 = $_POST['summer_3'];
    $autumn_3 = $_POST['autumn_3'];
    $spring_3 = $_POST['spring_3'];
    $winter_4 = $_POST['winter_4'];
    $summer_4 = $_POST['summer_4'];
    $autumn_4 = $_POST['autumn_4'];
    $spring_4 = $_POST['spring_4'];

    $values_1 = [$winter_1, $summer_1, $autumn_1, $spring_1];
    $values_2 = [$winter_2, $summer_2, $autumn_2, $spring_2];
    $values_3 = [$winter_3, $summer_3, $autumn_3, $spring_3];
    $values_4 = [$winter_4, $summer_4, $autumn_4, $spring_4];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (in_array("", $values_1) || in_array("", $values_2) || in_array("", $values_3) || in_array("", $values_4)) {
        echo "<script>window.location.href = '$referer';</script>";
        exit(); 
    }

    if (count($values_1) !== count(array_unique($values_1)) || 
        count($values_2) !== count(array_unique($values_2)) || 
        count($values_3) !== count(array_unique($values_3)) || 
        count($values_4) !== count(array_unique($values_4))) {
        echo "<script>window.location.href = '$referer';</script>";
        exit(); 
    }

    foreach (array_merge($values_1, $values_2, $values_3, $values_4) as $value) {
        if ($value < 1 || $value > 4) {
            echo "<script>window.location.href = '$referer';</script>";
            exit(); 
        }
    }
    

    $sql = "INSERT INTO test_sorting (winter_1, summer_1, autumn_1, spring_1, winter_2, summer_2, autumn_2, spring_2, winter_3, summer_3, autumn_3, spring_3, winter_4, summer_4, autumn_4, spring_4, season, image_name) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db_link->prepare($sql);
    
    $stmt->bind_param("iiiiiiiiiiiiiiiiss", 
        $winter_1, $summer_1, $autumn_1, $spring_1, 
        $winter_2, $summer_2, $autumn_2, $spring_2, 
        $winter_3, $summer_3, $autumn_3, $spring_3, 
        $winter_4, $summer_4, $autumn_4, $spring_4, 
        $season, $image_name);

    if ($stmt->execute()) {

        unset($_SESSION['season']);
        unset($_SESSION['experiment_img']);
        
        echo "<script>alert(`感謝您的回饋!`); window.location.href = '$referer';</script>";
    } else {
        echo "<script>window.location.href = '$referer';</script>";
    }    
} else {
    echo "<script>window.location.href = '$referer';</script>";
}
?>
