<?php
// 连接数据库
include("connect.php");

// 选择数据库
$select_db = mysqli_select_db($db_link, "quatrefoil");
if (!$select_db) {
    $response['state'] = False;
    $response['msg'] = "發生錯誤，請稍後再試(db)";
} else {
    // 获取表单数据
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

    // 將所有的值存儲在一個數組中
    $values_1 = [$winter_1, $summer_1, $autumn_1, $spring_1];
    $values_2 = [$winter_2, $summer_2, $autumn_2, $spring_2];
    $values_3 = [$winter_3, $summer_3, $autumn_3, $spring_3];
    $values_4 = [$winter_4, $summer_4, $autumn_4, $spring_4];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 檢查是否有空值
    if (in_array("", $values_1) || in_array("", $values_2) || in_array("", $values_3) || in_array("", $values_4)) {
        exit(); // 停止脚本，不执行插入操作
    }

    // 檢查是否有重複的值
    if (count($values_1) !== count(array_unique($values_1)) || 
        count($values_2) !== count(array_unique($values_2)) || 
        count($values_3) !== count(array_unique($values_3)) || 
        count($values_4) !== count(array_unique($values_4))) {
        exit(); // 停止脚本，不执行插入操作
    }

    // 檢查是否所有值都在1到4之間
    foreach (array_merge($values_1, $values_2, $values_3, $values_4) as $value) {
        if ($value < 1 || $value > 4) {
            exit(); // 停止脚本，不执行插入操作
        }
    }

    // 开始会话并获取 session 数据
    session_start();
    $season = isset($_SESSION['season']) ? $_SESSION['season'] : '';
    $image_name = isset($_SESSION['experiment_img']) ? $_SESSION['experiment_img'] : '';

    // 插入数据到数据库表中
    $sql = "INSERT INTO test_sorting (winter_1, summer_1, autumn_1, spring_1, winter_2, summer_2, autumn_2, spring_2, winter_3, summer_3, autumn_3, spring_3, winter_4, summer_4, autumn_4, spring_4, season, image_name) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db_link->prepare($sql);
    
    // 绑定参数
    $stmt->bind_param("iiiiiiiiiiiiiiiiss", 
        $winter_1, $summer_1, $autumn_1, $spring_1, 
        $winter_2, $summer_2, $autumn_2, $spring_2, 
        $winter_3, $summer_3, $autumn_3, $spring_3, 
        $winter_4, $summer_4, $autumn_4, $spring_4, 
        $season, $image_name);

    // 所有檢查都通過，執行插入操作
    if ($stmt->execute()) {
        echo "表單上傳成功";
        exit();
    } else {
        echo "插入数据时出错: " . $stmt->error;
    }
}
?>
